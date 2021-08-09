<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rendez_vous;
use App\Models\doctor;
use App\Models\user;


class rdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rendez_vouses = rendez_vous::paginate(20);
        return view('patient.dbd',\compact('rendez_vouses'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = doctor::latest()->get();
        $users = user::latest()->get();
        return view('patient.rdv',\compact('doctors') , \compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        rendez_vous::create($request->all());
        return redirect('/rendez_vouses');
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
        $rendez_vouses = rendez_vous::find($id);
        return view('patient.edit', ['rendez_vouses'=>$rendez_vouses]);
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
        $rendez_vous = $rendez_vous::find($id);
        $rendez_vous->update([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'address'=> $request->address,
            'ville'=> $request->ville,
            'cin'=> $request->cin,
            'naissance'=> $request->naissance,
            'desc'=> $request->desc
        ]);
        if ($request->firstname){
            $rendez_vous->firstname = $request->firstname;
        }
        if ($request->lastname){
            $rendez_vous->lastname = $request->lastname;
        }
        if ($request->address){
            $rendez_vous->address = $request->address;
        }
        if ($request->ville){
            $rendez_vous->ville = $request->ville;
        }
        if ($request->cin){
            $rendez_vous->cin = $request->cin;
        }
        if ($request->naissance){
            $rendez_vous->naissance = $request->naissance;
        }
        if ($request->desc){
            $rendez_vous->desc = $request->desc;
        }
        
        $rendez_vous->save();
        return redirect('/rendez_vouses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rendez_vous = $rendez_vous::find($id);
        $rendez_vous->delete();
        return back();
    }
}
