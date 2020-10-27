<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use DB;

use App\User_login;
use App\User_details;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $userdetails=DB::table('user_details')
                    ->where('login_id',$user->id)
                    ->where('status',1)
					->first();
        return view('user.profile', compact('user','userdetails'));
    }

    public function EditProfile()
    {
        $user = Auth::user();

        $userdetails=DB::table('user_details')
                    ->where('login_id',$user->id)
                    ->where('status',1)
					->first();
        return view('user.edit-profile', compact('user','userdetails'));
    }

    public function UpdateProfile(Request $request)
    {
        $user = Auth::user();

        $userdetails = User_details::where('login_id', $user->id)->first();
        $userdetails->email = $request->email;
        $userdetails->dob = $request->dob;
        $userdetails->city = $request->city;
        $update = $userdetails->save();  

        return $this->index();
        
    }

}
