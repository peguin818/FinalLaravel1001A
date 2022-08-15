<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signin() {
        return view('T2LEGOShop.Admin.signin');
    }

    public function signup() {
        return view('T2LEGOShop.Admin.signup');
    }
    
    public function index()
    {
        $data = User::get();
        return view('list', compact('data'));
    }

    public function userSignup(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'address' => 'required'
        ]);


        $user = new User();
        $user->usrUsername = $request->username;
        $user->usrPassword = Hash::make($request->password);
        $user->usrEmail = $request->email;
        $user->usrFirstName = $request->firstName;
        $user->usrLastName = $request->lastName;
        $user->usrTel = $request->telephone;
        $user->usrAddr = $request->address;

        $result = $user->save();

        if ($result) {
            return back()->with('success', 'Sign up successfully');
        } else {
            return back()->with('fail', 'Sign up unsuccessfully');
        }
    }

    public function userSignin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('usrUsername', '=', $request->username)->first();

        if($user){
            if(Hash::check($request->password, $user->usrPassword)){
                $request->session()->put('loginID', $user->usrUsername);
                return redirect('/');
            } else {
                return back()->with('fail', 'Password is not correct');
            }
        } else {
            return back()->with('fail', 'Username not found');
        }
    }

    public function userSignout() {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('/');
        }
    }
}
