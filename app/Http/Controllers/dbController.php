<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dbmodel;

class dbController extends Controller
{
    public function index()
    {
        return view('dbView');
    }

    public function show(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'dob' => 'required|date'
        ]);

        $cus = new dbmodel;
        $cus->name = $req->input('name');
        $cus->email = $req->input('email');
        $cus->address = $req->input('address');
        $cus->dob = $req->input('dob');
        $cus->password = md5($req->input('password'));
        $cus->save();
        echo "<pre>";
        print_r($req->all());
        return redirect('/dbshow');
    }
    public function showdb()
    {
        $var1=dbmodel::all();
        $data= compact('var1');
        return view('showdb')->with($data);
    }
}
