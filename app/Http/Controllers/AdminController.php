<?php

namespace App\Http\Controllers;

use App\Models\Barcode;
use App\Models\Head;
use App\Models\Slip;
use App\Models\User;
use App\Models\Faculty;
use App\Models\Purpose;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function verifyUser($id)
    {
        $user = User::findOrFail($id);  // Find the user by ID

        if ($user->is_verified) {
            return redirect()->back()->with('error', 'This user is already verified.');
        }

        // Verify the user
        $user->is_verified = true;
        $user->save();

        return redirect()->back()->with('success', 'User has been verified successfully.');
    }
    //
    public function index()
    {
        // Fetch all necessary data
        $departments = Department::all();
        $designations = Designation::all();
        $purposes = Purpose::all();
        $slips = Slip::all();

        // Fetch users based on designation
        $faculty = User::where('designation', 'Faculty')->get();
        $heads = User::where('designation', 'Head of Office')->get();

        // Count statistics
        $totalPending = Slip::where('status', 'pending')->count();
        $totalApproved = Slip::where('status', 'approved')->count();
        $rejectedPassSlip = Slip::where('status', 'disapproved')->count();
        $totalUsers = User::count();
        $totalAdmin = User::where('designation', 'Admin')->count();
        $totalBarcode = Barcode::all();


        // Check if the user is authenticated
        if (Auth::check()) {
            return view('admin.index', compact(
                'departments',
                'heads',
                'designations',
                'purposes',
                'slips',
                'totalPending',
                'faculty',
                'totalUsers',
                'rejectedPassSlip',
                'totalAdmin',
                'totalApproved',
                'totalBarcode',

            ));
        } else {
            return redirect('/login');
        }
    }


    public function adminlogout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'logged out successfully');
    }

    public function adminprofile()
    {
        return view('admin.profile.index');
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->banned = true;
        $user->save();

        return redirect()->back()->with('success', 'User has been banned.');
    }

    public function unban($id)
    {
        $user = User::find($id);
        $user->banned = false;
        $user->save();

        return redirect()->back()->with('success', 'User has been reactivated.');
    }
}