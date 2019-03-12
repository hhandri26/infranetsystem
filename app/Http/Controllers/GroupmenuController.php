<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Level_users;

class GroupmenuController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $groupmenu      =Groupmenu::all();
        return view('groupmenu/index', compact('groupmenu'));
    }

    public function create()
    {
         $level_users    =   Level_users::all();
        return view('groupmenu/add',compact('level_users'));   
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'    =>'required|string|unique:t_group_menu',
            'level'   =>'required|string',
            'icon'    =>'required|string'
        ]);
       
        Groupmenu::create($request->all());
        return redirect()->route('groupmenu.index')->with('sukses','berhasil memasukan data');
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        $level_users        = Level_users::all();
        $groupmenu          = Groupmenu::findOrFail($id);
        return view('groupmenu/edit', compact('groupmenu','level_users'));
    }

  
    public function update(Request $request, $id)
    {
        $groupmenu = Groupmenu::findOrFail($id);
        $groupmenu->update($request->all());
        return redirect()->route('groupmenu.index')->with('sukses','berhasil merubah data');
    }

    
    public function destroy($id)
    {
        $groupmenu = Groupmenu::findOrFail($id);
        $groupmenu->delete();
        return redirect()->route('groupmenu.index')->with('sukses','berhasil menghapus data');
    }
}
