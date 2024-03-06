<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emps;

class formController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('first');
    }
    public function store(Request $request)
    {
        $emp = new emps();
        $emp->name = $request->input('name');
        $emp->phone = $request->input('phone');
        $emp->password = $request->input('password');
        $emp->save();
        return redirect('register');
    }
}
