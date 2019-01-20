<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//load model
use App\Users;
use App\Level_users;
use Alert;


  
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user      =Users::all();
        //pagination and order by
        //$user      =Users::orderBy('id', 'DESC')->paginate(5);
        return view('users/index', compact('user'));
    }

  
    public function create()
    {
        //load database
        $level_users    =   Level_users::all();
        return view('users/add', compact('level_users'));
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      =>'required|string|max:255',
            'email'     =>'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
            'phone'     => 'required|string|min:12',
        ]);
        $post           = new Users;
        $post->name     = $request->name;
        $post->email    = $request->email;
        $post->password = bcrypt($request->password);
        $post->phone    = $request->phone;
        $post->level    = $request->level;
        $post->save();
        return redirect()->route('users.index')->with('sukses','berhasil memasukan data');
    }

   
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        $users          = Users::findOrFail($id);
        $level_users    = Level_users::all();
        return view('users/edit', compact('users','level_users'));
        
    }

    
    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $users->update($request->all());
        return redirect()->route('users.index')->with('sukses','berhasil menupdate data'); 
    }

    
    public function destroy($id)
    {
        $users = Users::findOrFail($id);
        $users->delete();
        return redirect()->route('users.index')->with('sukses','berhasil menghapus data'); 
    }


}
