<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
  
    //
    public function index(){
        return view('index.index');
    }

    // ====== SUPER ADMIN ====== //

                     // ====== DOKTER ===== //

    public function listdatauser(){
        $user=User::all();
        return view('user.listdatauser',['user'=>$user]);
    }
    public function tambahdatauser(){
        return view('user.tambahdatauser');
    }

    public function storeuser(Request $request){
        $request->validate([
            'name'=>'required',
            'alamat'=>'required',
            'telepon'=>'required',
            'email'=>'required',
        ]);
        // $this->validate($request,[
           
        // ]);
        $user=User::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'telepon'=>$request->telepon,
            'sim'=>$request->sim,
            'email'=>$request->email,
        ]);
        $user->assignRole('user');
        return back();
    }
                // ===== END DOKTER ===== //

    
}
