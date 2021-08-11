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
            'fname'=> 'required',
            'lname'=> 'required',
            'spec'=> 'required',
            'telephone'=> 'required',
        ]);


        $doctor = new doctor;
        $doctor->fname = $request->fname;
        $doctor->lname = $request->lname;
        $doctor->spec = $request->spec;
        $doctor->telephone = $request->telephone;

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
        if ($request->ftname){
            $doctor->ftname = $request->ftname;
        }
        if ($request->lname){
            $doctor->lname = $request->lname;
        }
        if ($request->spec){
            $doctor->spec = $request->spec;
        }
        if ($request->telephone){
            $doctor->telephone = $request->telephone;
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
