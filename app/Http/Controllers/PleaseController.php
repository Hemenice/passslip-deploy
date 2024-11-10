<?php

namespace App\Http\Controllers;

use App\Models\Please;
use Illuminate\Http\Request;

class PleaseController extends Controller
{
    //

    public function index()
    {
        $headtype = Please::all();
        return view('admin.pleaseheadtype.index', compact('headtype'));
    }


    public function viewcreateheadtype()
    {
        return view('admin.pleaseheadtype.create');
    }


    public function createheadtype(Request $request)
    {
        $fields = $request->validate([
            'please_name',
        ]);

        Please::create($fields);

        return redirect('/pleaseheadtype');
    }
}