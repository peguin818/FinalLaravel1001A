<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
}
