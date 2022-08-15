<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index() {
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
