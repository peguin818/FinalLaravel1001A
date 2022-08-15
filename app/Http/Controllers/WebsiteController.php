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

    public function productList() {
        $data = DB::table('products')
        ->join('themes', 'themes.themeID', 'products.themeID')
        ->select('products.*', 'themes.themeName')
        ->get();

        return view('T2LEGOShop/Admin.productList', compact('data'));
    }

    public function productAdd() {
        $theme = Theme::get();
        return view('T2LEGOShop.Admin.productAdd', compact('theme'));
    }

    public function productSave(Request $request) {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required',
            'image1' => 'required',
            'theme' => 'required',
        ]);

        $id = $request->id;
        $name = $request->name;
        $price = $request->price;
        $detail = $request->detail;
        $image1 = $request->image1;
        $image2 = $request->image2;
        $image3 = $request->image3;
        $theme = $request->theme;

        $product = new Product();
        
        $product->prdID = $id;
        $product->prdName = $name;
        $product->prdPrice = $price;
        $product->prdDetail = $detail;
        $product->prdImage1 = $image1;
        $product->prdImage2 = $image2;
        $product->prdImage3 = $image3;
        $product->themeID = $theme;
        $product->save();

        return redirect()->back()->with('success', 'Product added successfully');
    }

    public function productEdit($id) {
        $data = Product::where('prdID', '=', $id)->first();
        return view('T2LEGOShop.Admin.productEdit', compact('data'));
    }

    public function productUpdate(Request $request) {
        
        $id = $request->id;
        Product::where('prdID', '=', $id)->update([
            'prdName' => $request->name,
            'prdPrice' => $request->price,
            'prdDetail' => $request->detail,
            'prdImage1' => $request->image1,
            'prdImage2' => $request->image2,
            'prdImage3' => $request->image3,
            'themeID' => $request->theme
        ]);

        return redirect()->back()->with('success', 'Product update successfully');
    }

    public function productDelete($id) {
        Product::where('prdID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product delete successfully');
    }
    
}
