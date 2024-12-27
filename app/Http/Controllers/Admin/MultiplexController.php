<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CityModel;
use App\Models\MultiplexModel;
use Illuminate\Http\Request;

class MultiplexController extends Controller
{
    public function index()
    {
        $location = CityModel::get();
        return view('admin.pages.multiplex.add', compact('location'));
    }
    public function add(Request $request)
    {
        $multiplex = new MultiplexModel();
        $multiplex->multiplex_name = $request->multiplex_name;
        $multiplex->location = $request->location[0];
        $multiplex->save();
        return redirect()->route('multiplex.list');
    }
    public function list() 
    {
        $multiplex_list=MultiplexModel::all();
        return view('admin.pages.multiplex.list',compact('multiplex_list'));
    }
    public function edit(Request $request)
    {
        $multiplex_list=MultiplexModel::where("id",$request->id)->first();
        $location = CityModel::get();
        return view('admin.pages.multiplex.edit',compact('multiplex_list','location'));
    }
    public function update(Request $request)
    {
        $multiplex = MultiplexModel::where('id',$request->id)->first();
        $multiplex->multiplex_name = $request->multiplex_name;
        $multiplex->location = $request->location[0];
        $multiplex->save();
        return redirect()->route('multiplex.list');
    }
    public function delete() {}
}
