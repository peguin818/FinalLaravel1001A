<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

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

        $user->save();

        /*if ($result) {
            return back()->with('success', 'Sign up successfully');
        } else {
            return back()->with('fail', 'Sign up unsuccessfully');
        }*/

        return redirect()->back()->with('success', 'Sign up successfully');


    }

}
