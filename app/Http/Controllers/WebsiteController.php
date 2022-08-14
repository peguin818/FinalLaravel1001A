<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebsiteController extends Controller
{
    public function index() {
        return view('T2LEGOShop.home');
    }

    public function featured() {
        return view('T2LEGOShop.featuredProducts');
    }
}
