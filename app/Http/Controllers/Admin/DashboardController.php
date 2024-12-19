<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MovieModel;
use App\Models\TheatreModel;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $movies = MovieModel::all();
        $movieCount = count($movies);
        $user = User::all();
        $userCount = count($user);
        $theatre = TheatreModel::all();
        $theatreCount = count($theatre);
        flash()->success('Your account has been restored.');
        return view("admin.pages.dashboard", compact('movieCount', 'userCount', 'theatreCount'));
    }
}
