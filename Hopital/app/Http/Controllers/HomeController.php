<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;

        if($role=='admin'){
            return view('admin.dbd');
        }
        if($role=='acceuil'){
            return view('acceuil.dbd');
        }
        if($role=='doctor'){
            return view('doctor.dbd');
        }
        else{
            return view('patient.dbd');
        }
    }
}
