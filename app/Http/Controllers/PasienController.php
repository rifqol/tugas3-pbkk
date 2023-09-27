<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class PasienController extends Controller
{
    public function index(){
        return view('pasien.index');
    }

    public function create(){
        return view('pasien.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            
            'photo' => 'required|file|mimes:png,jpg,jpeg|max:2048', // Ekstensi dan ukuran maksimal
        ]);

        if ($validator->fails()) {
            return redirect('add-pasiens')
                ->withErrors($validator)
                ->withInput();
        }

        $pasiens = new pasien;
        $pasiens -> nama = $request->input('nama');
        $pasiens -> nik = $request->input('nik');
        $pasiens -> email = $request->input('email');
        $pasiens -> alamat = $request->input('alamat');

        if($request-> hasfile('photo')){
            $file= $request -> file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file ->move('upload/pasiens', $filename);
            $pasiens -> photo = $filename;
        }

        $pasiens -> save();
        return redirect()->back()->with('status', 'Photo Pasien Berhasil di Upload');
    }

}
