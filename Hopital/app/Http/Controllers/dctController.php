<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
class dctController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = doctor::paginate(20);
        return view('admin.dbd',\compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=> 'required',
            'lastname'=> 'required'
        ]);


        $doctor = new doctor;
        $doctor->firstname = $request->firstname;
        $doctor->lastname = $request->lastname;

        $doctor->save();
        return redirect('/doctors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctors = doctor::find($id);
        return view('admin.edit', ['doctors'=>$doctors]);
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
        // return $request;
        $doctor = doctor::find($id);
        // $doctor->update([
        //     'firstname'=>$request->firstname,
        //     'lastname'=>$request->lastname
        // ]);
        if ($request->firstname){
            $doctor->firstname = $request->firstname;
        }
        if ($request->lastname){
            $doctor->lastname = $request->lastname;
        }
        
        $doctor->save();
        return redirect('/doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = doctor::find($id);
        $doctor->delete();
        return back();
    }
}
