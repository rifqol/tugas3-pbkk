<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;

class ShowController extends Controller
{
    public function show(){
        $data=pasien::all();
        return view('home', compact('data'));
    }
}
