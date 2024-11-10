<?php

namespace App\Http\Controllers;

use App\Models\Headtype;
use App\Models\User;
use Illuminate\Http\Request;

class HeadTypeController extends Controller
{
    //

    public function index()
    {
        $headtype = User::all();
        return view('admin.headtype.index', compact('headtype'));
    }

    public function createheadtype(Request $request)
    {
        $fields = $request->validate([
            'head_type_name' => 'required',
            'head_desc' => 'required',
        ]);

        Headtype::create($fields);
        return redirect('/head-type')->with('success', 'Head type created successfully');
    }
}