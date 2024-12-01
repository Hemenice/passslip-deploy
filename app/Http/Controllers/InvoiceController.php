<?php



namespace App\Http\Controllers;

use App\Models\Slip;
use App\Models\Barcode;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;



class InvoiceController extends Controller

{

    public function showPrintView($id)
    {

        $slip = Slip::with(['user', 'barcodes'])->findOrFail($id);

        $printbarcode = $slip->barcodes;

        return view('pass_slips.print_view', compact('slip', 'printbarcode'));
    }

    public function printPassSlip($id)
    {
        try {
            $slip = Slip::with('user')->findOrFail($id);
            $scannedBarcodes = Barcode::all(); // Adjust this to your actual fetching logic

            // Generate the PDF
            $pdf = FacadePdf::loadView('pass_slips.print_view', compact('slip', 'scannedBarcodes'));

            // Attempt to download the PDF
            return response($pdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="print_view.pdf"',
            ]);
        } catch (\Exception $e) {
            // Log the error for debugging purposes
            \Log::error('PDF download failed: ' . $e->getMessage());

            try {
                // If download fails, stream the PDF
                $slip = Slip::with('user')->findOrFail($id);
                $pdf = FacadePdf::loadView('pass_slips.print_view', compact('slip', 'scannedBarcodes'));

                return $pdf->stream('print_view.pdf');
            } catch (\Exception $streamException) {
                // Log the error for debugging purposes
                \Log::error('PDF streaming also failed: ' . $streamException->getMessage());

                // Return a fallback error message
                return back()->withErrors('Unable to generate PDF. Please try again later.');
            }
        }
    }


    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index(Request $request)

    {

        $data = [

            [

                'quantity' => 2,

                'description' => 'Gold',

                'price' => '$500.00'

            ],

            [

                'quantity' => 3,

                'description' => 'Silver',

                'price' => '$300.00'

            ],

            [

                'quantity' => 5,

                'description' => 'Platinum',

                'price' => '$200.00'

            ]

        ];



        $pdf = Pdf::loadView('invoice', ['data' => $data]);



        return $pdf->download();
    }
}