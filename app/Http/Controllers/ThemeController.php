<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Theme::get();
        return view('T2LEGOShop.Admin.themeList', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add() {
        return view('T2LEGOShop.Admin.themeAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request) {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $name = $request->name;
        $detail = $request->detail;

        $themeName = Theme::where('themeName', '=', $name);

        if($themeName) {
            return redirect()->back()->with('fail', 'Theme added unsuccessfully, Duplicate Theme Name');
        } else {
            $theme = new Theme();
        
            $theme->themeName = $name;
            $theme->themeDetail = $detail;
            $theme->save();
    
            return redirect()->back()->with('success', 'Theme added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $data = Theme::where('themeID', '=', $id)->first();
        return view('T2LEGOShop.Admin.themeEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        
        $id = $request->id;
        Theme::where('themeID', '=', $id)->update([
            'themeName' => $request->name,
            'themeDetail' => $request->detail
        ]);

        return redirect()->back()->with('success', 'Theme update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id) {
        Theme::where('themeID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Theme delete successfully');
    }
}
