<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level_users;

class LevelusersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
        $level_users      =Level_users::all();
        return view('level_users/index', compact('level_users'));
    }

  
    public function create()
    {
        return view('level_users/add');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'level'         =>'required|string|max:2|unique:t_level_users',
            'description'   =>'required|string'
        ]);
       
        Level_users::create($request->all());
        return redirect()->route('level_users.index')->with('sukses','berhasil memasukan data');
    }

   
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $level_users          = level_users::findOrFail($id);
        return view('level_users/edit', compact('level_users'));
    }

    
    public function update(Request $request, $id)
    {
        $level_users = level_users::findOrFail($id);
        $level_users->update($request->all());
        return redirect()->route('level_users.index')->with('sukses','berhasil merubah data');
    }

    public function destroy($id)
    {
        $level_users = level_users::findOrFail($id);
        $level_users->delete();
        return redirect()->route('level_users.index')->with('sukses','berhasil menghapus data');
    }
}
