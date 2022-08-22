<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Theme;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $data = DB::table('products')
        ->join('themes', 'themes.themeID', 'products.themeID')
        ->select('products.*', 'themes.themeName')
        ->get();
        
        return view('T2LEGOShop.Admin.productList', compact('data'));
    }

    public function add() {
        $theme = Theme::get();
        return view('T2LEGOShop.Admin.productAdd', compact('theme'));
    }

    public function save(Request $request) {
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

        $productID = Product::where('prdID', '=', $id);

        if($productID) {
            return redirect()->back()->with('fail', 'Product added unsuccessfully');
        } else {
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
    }

    public function edit($id) {
        $data = Product::where('prdID', '=', $id)->first();
        $theme = Theme::get();
        return view('T2LEGOShop.Admin.productEdit', compact('data', 'theme'));
    }

    public function update(Request $request) {
        
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

    public function delete($id) {
        Product::where('prdID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product delete successfully');
    }
}
