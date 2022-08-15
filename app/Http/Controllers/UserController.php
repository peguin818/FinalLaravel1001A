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

    public function index() {
        $data = User::get();
        return view('T2LEGOShop.Admin.userList', compact('data'));
    }

    public function add() {
        return view('T2LEGOShop.Admin.userAdd');
    }

    public function save(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'email' => 'required'
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
            return back()->with('success', 'User add successfully');
        } else {
            return back()->with('fail', 'User add unsuccessfully');
        }
    }

    public function edit($id) {
        $data = User::where('usrID', '=', $id)->first();
        return view('T2LEGOShop.Admin.userEdit', compact('data'));
    }

    public function update(Request $request) {
        
        $id = $request->id;
        User::where('usrID', '=', $id)->update([
            'usrUsername' => $request->username,    
            'usrPassword' => Hash::make($request->password),
            'usrFirstName' => $request->firstName,
            'usrLastName' => $request->lastName,
            'usrTel' => $request->telephone,
            'usrAddr' => $request->address,
            'usrEmail' => $request->email
        ]);

        return redirect()->back()->with('success', 'User update successfully');
    }

    public function delete($id) {
        User::where('usrID', '=', $id)->delete();
        return redirect()->back()->with('success', 'User delete successfully');
    }
}
