<?php

namespace App\Http\Controllers;

use App\Models\Vehical;
use Illuminate\Http\Request;

class VehicalController extends Controller
{
    //here index page first link page open
    public function index()
    {
        return View('welcome');
    }

    //here dipsaly page for show all data
    public function disaply()
    {
        $vehical=Vehical::all();
        return View('show',compact('vehical'));
    }

    //here insert method for insert data in databse  
    public function store(Request $request)
    {
        $vehical=new Vehical();
        $vehical->name=$request->input('name');
        $vehical->price=$request->input('price');
        $vehical->fuel_capacity=$request->input('fuel_capacity');
        $vehical->millage=$request->input('millage');
        $vehical->save();
        return redirect()->back()->with('status','Student Added Succesfully...');
    }

    //here update method for update tha data
    public function update(Request $request, Vehical $vehical)
    {
        $vehical->update($request->all());
        return redirect()->back()->with('status',' Student Updated sucessfully');
    }

    //here delete method to delete particluar data
    public function destroy(Vehical $vehical)
    {
        $vehical->delete();
        return redirect()->back();
    }
}
