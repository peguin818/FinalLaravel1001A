<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Theme;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index() {
        return view('T2LEGOShop.home');
    }

    public function featured() {
        return view('T2LEGOShop.featuredProducts');
    }

    public function products() {
        $dataTechnic = DB::table('products')->where('themeID', '=', '4')->get();
        $dataMarvel = DB::table('products')->where('themeID', '=', '1')->get();
        $dataStarwars = DB::table('products')->where('themeID', '=', '5')->get();
        return view('T2LEGOShop.products', compact('dataTechnic', 'dataMarvel', 'dataStarwars'));
    }

    public function contact() {
        return view('T2LEGOShop.contact');
    }

    public function about() {
        return view('T2LEGOShop.about');
    }

    public function adminIndex() {
        return view('T2LEGOShop/Admin.index');
    }
    
    public function themeList()
    {
        $data = Theme::get();
        return view('T2LEGOShop.Admin.themeList', compact('data'));
    }

    public function themeAdd() {
        return view('T2LEGOShop.Admin.themeAdd');
    }

    public function themeSave(Request $request) {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $name = $request->name;
        $detail = $request->detail;

        $theme = new Theme();
        
        $theme->themeName = $name;
        $theme->themeDetail = $detail;
        $theme->save();

        return redirect()->back()->with('success', 'Theme added successfully');
    }

    public function themeEdit($id) {
        $data = Theme::where('themeID', '=', $id)->first();
        return view('T2LEGOShop.Admin.themeEdit', compact('data'));
    }

    public function themeUpdate(Request $request) {
        
        $id = $request->id;
        Theme::where('themeID', '=', $id)->update([
            'themeName' => $request->name,
            'themeDetail' => $request->detail
        ]);

        return redirect()->back()->with('success', 'Theme update successfully');
    }

    public function themeDelete($id) {
        Theme::where('themeID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Theme delete successfully');
    }
}
