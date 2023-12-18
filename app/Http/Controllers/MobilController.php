<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    //
    public function tambahdatamobil(){
        $mobil= Mobil::all();
        return view('mobil.tambahdatamobil',['mobil'=>$mobil]);
    }

    public function storemobil(Request $request){
        $request->validate([
            'merk'=>'required',
            'model'=>'required',
            'harga_sewa'=>'required',
            'plat_nomor'=>'required',  
        ]);
        $mobil=Mobil::create([
          
            'merk'=>$request->merk,
            'model'=>$request->model,
            'harga_sewa'=>$request->harga_sewa,
            'plat_nomor'=>$request->plat_nomor,
            
        ]);
        return dd($mobil);
    }
    public function listdatamobil(){
        $mobil= Mobil::all();
        return view('mobil.listdatamobil',['mobil'=>$mobil]);
    }
}
