<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admController extends Controller
{
    public function create()
    {
        return view('admin.add');
    }

    public function edit()
    {
        // $category = Category::find($id);
        return view('admin.edit');
    }
}
