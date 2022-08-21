<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function signin() {
        return view('T2LEGOShop.Admin.adminSignin');
    }

    public function adminSignin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('admUsername', '=', $request->username)->first();

        if($admin){
            if(Hash::check($request->password, $admin->admPassword)){
                $request->session()->put('adminLoginID', $admin->admUsername);
                return redirect('admin/');
            } else {
                return back()->with('fail', 'Password is not correct');
            }
        } else {
            return back()->with('fail', 'Username not found');
        }
    }

    public function adminSignout() {
        if(Session::has('adminLoginID')) {
            Session::pull('adminLoginID');
            return redirect('admin/signin');
        }
    }

    public function index(Request $request) {
        $data = array();
        if(Session::has('adminLoginID')) {
            $data = Admin::where('admUsername', '=', Session::get('adminLoginID'))->first();
        }
        return view('T2LEGOShop/Admin.index', compact('data'));
    }

    public function adminList() {
        $data = Admin::get();
        return view('T2LEGOShop.Admin.adminList', compact('data'));
    }

    public function add() {
        return view('T2LEGOShop.Admin.adminAdd');
    }

    public function save(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'telephone' => 'required',
        ]);

        $admin = new Admin();
        $admin->admUsername = $request->username;
        $admin->admPassword = Hash::make($request->password);
        $admin->admFirstName = $request->firstName;
        $admin->admLastName = $request->lastName;
        $admin->admTel = $request->telephone;
        
        $result = $admin->save();

        if ($result) {
            return back()->with('success', 'Admin add successfully');
        } else {
            return back()->with('fail', 'Admin add unsuccessfully');
        }
    }

    public function edit($id) {
        $data = Admin::where('admID', '=', $id)->first();
        return view('T2LEGOShop.Admin.adminEdit', compact('data'));
    }

    public function update(Request $request) {
        
        $id = $request->id;
        Admin::where('admID', '=', $id)->update([
            'admUsername' => $request->username,    
            'admPassword' => Hash::make($request->password),
            'admFirstName' => $request->firstName,
            'admLastName' => $request->lastName,
            'admTel' => $request->telephone,
        ]);

        return redirect()->back()->with('success', 'Admin update successfully');
    }

    public function delete($id) {
        Admin::where('admID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Admin delete successfully');
    }
}
