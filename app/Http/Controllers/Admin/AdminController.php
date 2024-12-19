<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = AdminModel::all();
        return view("admin.pages.admin.list", compact("admin"));
    }
    public function edit(Request  $request)
    {
        $admin = AdminModel::where("id", $request->id)->first();
        return view("admin.pages.admin.edit", compact("admin"));
    }
    public function update(Request  $request)
    {
        $admin = AdminModel::where("id", $request->id)->first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        // $admin->password = $request->password ?? '';
        // $admin->status = $request->status ?? '';
        $admin->update();
        return redirect()->route("admin");
    }
}
