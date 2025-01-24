<?php

namespace App\Http\Controllers;

use App\Models\MovieModel;
use App\Models\TheatreModel;
use App\Models\User;
use Illuminate\Http\Request;

class AboutUscontroller extends Controller
{
    public function index()
    {
        $movies = MovieModel::all();
        $movieCount = count($movies);
        $user = User::all();
        $userCount = count($user);
        $theatre = TheatreModel::all();
        $theatreCount = count($theatre);
        return view('client.pages.about_us',compact('movieCount','userCount','theatreCount'));
    }
}
