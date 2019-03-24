<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class PendaftaranController extends Controller
{
    public function index()
    {
    	//$provinsi      =DB::table('provinsi')->get();

    	//return $provinsi;
        return view('pendaftaran/index');
    }

    public function store(Request $request)
    {
    	
        $data = $this->validate($request,[
            'name'      		=>'required|string|max:255',
            'email'     		=>'required|string|email|max:255|unique:users',
            'no_identitas'      =>'required|string|max:16|unique:users',            
        ]);
        
        $post           = new Users;
        $post->name     = $request->name;
        $post->email    = $request->email;
        $no_identitas 	= $request->no_identitas;
        $post->password = bcrypt($request->password);       
        $res 			= $post->save();
        if ($res) 
	        {        	
	        	return response()->json(['success'=>true]);
	         }
	        
	    return response()->json(['messages'=>$data]);
        //return redirect()->route('users.index')->with('sukses','berhasil memasukan data');
    }
}
