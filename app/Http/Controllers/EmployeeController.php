<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employee = $employee->all();
    }
    public function adddata()
    {
        return view('crud.addemployee');
    }
    public function showdata()
    {
        $Employee = employee::all();
    //    dd($Employee);
        return view('crud.showemployee',compact('Employee'));
    }
      //Savedata into database
    public function savedata(Request $request)
    {

       // dd($request->photo);
        $Employee = new employee;
        $Employee->name =  $request->input('name');
        $Employee->username = $request->input('username');
        $Employee->email =  $request->input('email');
        $Employee->phone =  $request->input('phone');
        $Employee->address =  $request->input('address');
        $Employee->department =  $request->input('department');
        $Employee->photo =  $request->input('photo');
        $Employee->gender =  $request->input('gender');
        $Employee->save();
        return redirect('/showdata');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

   
    public function editpage($id)
    {
         //dd($id);
         $Employee = employee::find($id);
        return view('crud.editemployee',['employee' => $Employee]);
    //return view("crud.editemployee");


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->department);
         $Employee = employee::find($id);
         $Employee->name = $request->name;
         $Employee->username = $request->username;
         $Employee->email = $request->email;
         $Employee->phone = $request->phone;
         $Employee->address = $request->address;
         $Employee->department = $request->department;
         $Employee->gender = $request->gender;
         $Employee->save();
         return redirect('/showdata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletepage($id)
    {
        // dd($id);
        $Employee = employee::find($id);
         $Employee->delete();
         return Redirect('/showdata');
        
    }
}
