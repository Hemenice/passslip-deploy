<?php

namespace App\Http\Controllers;

use App\Models\Head;
use App\Models\Slip;
use App\Models\User;
use App\Models\Purpose;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Picqer\Barcode\BarcodeGeneratorPNG;
use App\Notifications\PassSlipRequestNotification;

class AdminRequestPassSlipController extends Controller
{
    //
    public function requestpass()
    {
        $departments = Department::all();
        $purpose = Purpose::all();
        $heads = User::where('designation', 'Head of Office')->get();
        return view('admin.requestpass.index', compact('departments', 'purpose', 'heads'));
    }


    public function createrequestpass(Request $request)
    {
        $fields = $request->validate([

            'time_departure' => 'required',
            'time_arrival' => 'required',
            'date_departure' => 'required',
            'date_arrival' => 'required',
            'purpose' => 'required',
            'reason' => 'required',
            'department' => 'required',
            'head_office' => 'required',
            // 'status' => 'in:approved,disapproved,canceled', // optional, can use enum validation
        ]);

        // Add the current user's ID to $fields
        $fields['user_id'] = Auth::id();
        // Create the slip
        $slip = Slip::create($fields);

        // Generate the control number (e.g., 0001, 0002, etc.)
        $slip->control_number = str_pad($slip->id, 8, '0', STR_PAD_LEFT);

        // Generate the barcode using the control number
        $generator = new BarcodeGeneratorPNG();
        $barcodeData = $generator->getBarcode($slip->control_number, $generator::TYPE_CODE_128);

        // Define the barcode image file name and path
        $barcodeFileName = 'barcode_' . $slip->control_number . '.png';
        $barcodePath = public_path('barcodes/' . $barcodeFileName);

        // Save the barcode image to the public directory
        Storage::disk('public')->put('barcodes/' . $barcodeFileName, $barcodeData);

        // Save the barcode path or image name to the database
        $slip->barcode = $barcodeFileName; // Assuming you have a `barcode` column in the `slips` table
        $slip->status = 'pending';
        $slip->user_id = Auth::id();;

        // // Notify the admin
        // $admin = User::where('designation', 'Admin')->first();
        // if ($admin) {
        //     $userName = Auth::user()->name; // Get the logged-in user's name
        //     // Pass $userName to the notification
        //     $admin->notify(new PassSlipRequestNotification("{$userName} has requested a pass slip."));
        // }
        // Notify the admin
        // Notify the selected Head of Office
        $headOfOffice = User::find($fields['head_office']);
        if ($headOfOffice) {
            $userName = Auth::user()->name;
            $headOfOffice->notify(new PassSlipRequestNotification("{$userName} has requested a pass slip."));
        }

        // Save the slip with the barcode information
        $slip->save();

        return redirect('/viewpass')->with('success', 'Pass Slip Created Successfully');
    }

    private function generateBarcode($controlNumber)
    {
        // Implement your barcode generation logic here, e.g., using a library
        // For simplicity, return the control number as the barcode
        return $controlNumber;
    }

    public function updateStatus(Request $request, Slip $slip)
    {
        $validated = $request->validate([
            'status' => 'required|in:approved,disapproved,canceled',
        ]);

        $slip->updateStatus($validated['status']);
        return redirect()->route('slips.index')->with('success', 'Status updated successfully.');
    }

    public function editrequestpass($id)
    {
        $requestPass = Slip::findOrFail($id); // Replace with your model
        $purpose = Purpose::all();
        $departments = Department::all();
        $heads = User::where('designation', 'Head of Office')->get();
        $slip = Slip::all();

        return view('admin.requestpass.edit', compact('requestPass', 'purpose', 'departments', 'heads', 'slip'));
    }

    public function updateRequestPass(Request $request, $id)
    {
        $requestPass = Slip::find($id);
        $fields = $request->validate([
            'time_departure' => 'required|date_format:H:i',
            'time_arrival' => 'required|date_format:H:i',
            'date_departure' => 'required|date',
            'date_arrival' => 'required|date',
            'purpose' => 'required|string',
            'status' => 'required|in:cancel,pending,approved,disapproved',  // Ensure only valid statuses
            'reason' => 'required|string',
            'department' => 'required|string',
            'head_office' => 'required|string',
        ]);

        $requestPass->status = $request->input('status');
        // Update other fields...

        // Save the updated request
        $requestPass->save();
        // Find the request pass and update it
        $requestPass = Slip::findOrFail($id); // Replace with your model
        $requestPass->update($fields);

        return redirect('/viewpass')->with('success', 'Request Pass updated successfully.');
    }
}