<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class ptnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = patient::paginate(20);
        return view('patient.dbd',\compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.rdv');
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
            'lastname'=> 'required',
            'address'=> 'required',
            'ville'=> 'required',
            'cin'=> 'required',
            'naissance'=> 'required',
            'description'=> 'required',
        ]);


        $patient = new patient;
        $patient->firstname = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->address = $request->address;
        $patient->ville = $request->ville;
        $patient->cin = $request->cin;
        $patient->naissance = $request->naissance;
        $patient->description = $request->description;

        $patient->ptn_id = auth()->id();

        $patient->save();
        return redirect('/patients');
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
        $patients = patient::find($id);
        return view('patient.edit', ['patients'=>$patients]);
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
        $patient = patient::find($id);
        $patient->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname
        ]);
        if ($request->firstname){
            $patient->firstname = $request->firstname;
        }
        if ($request->lastname){
            $patient->lastname = $request->lastname;
        }
        
        $patient->save();
        return redirect('/patients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = patient::find($id);
        $patient->delete();
        return back();
    }
}
