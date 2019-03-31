<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupmenu;
use App\Models\Submenu;
use Alert;
use DB;
use App\User;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function signup(Request $request)
    {
        
        $this->validate($request,[
            'name'      => 'required|unique:users',
            'email'     => 'required|unique:users',
            'password'  => 'required',
        ]);

        return User::create([
            'name'      => $request->json('name'),
            'email'     => $request->json('email'),
            'password'  => bcrypt($request->json('password')),
        ]);
    }

    public function signin(Request $request)
    {
        $this->validate($request,[
            'email'     => 'required',
            'password'  => 'required',
        ]);

        // grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        // all good so return the token
        // update token api to table user
        $userid = $request->user()->id;
        $update = DB::table('users')
                  ->where('id',$userid)
                  ->update(['token_api' =>$token]);
        return response()->json([
            'user_id'   => $request->user()->id,
            'token'     => $token,
        ]);

    }

    
}
