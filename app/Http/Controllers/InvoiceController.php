<?php



namespace App\Http\Controllers;

use App\Models\Slip;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;



class InvoiceController extends Controller

{

    public function showPrintView($id)
    {
        $slip = Slip::with('user')->findOrFail($id); // Find the pass slip by ID and load related user data

        return view('pass_slips.print_view', compact('slip')); // Return the print view with the pass slip data
    }

    public function printPassSlip($id)
    {
        $slip = Slip::with('user')->findOrFail($id);

        return view('pass_slips.print', compact('slip'));
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
