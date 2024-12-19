<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CityModel;
use App\Models\CountryModel;
use App\Models\StateModel;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function states()
    {
        $states = CountryModel::where('id', 105)->with('states')->first();
        $data = $states->states;
        return view("admin.pages.countries.states-list", compact('data'));
    }
    public function cities(Request $request)
    {
        $cities = StateModel::where('id', $request->id)->with('cities')->first();
        $data = $cities->cities;
        return view("admin.pages.countries.cities-list", compact('data','cities'));
    }
}
