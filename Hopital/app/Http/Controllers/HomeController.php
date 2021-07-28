<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='1'){
            return view('admin.dbd');
        }
        if($role=='2'){
            return view('acceuil.dbd');
        }
        if($role=='3'){
            return view('doctor.dbd');
        }
        else{
            return view('patient.dbd');
        }
    }
}
