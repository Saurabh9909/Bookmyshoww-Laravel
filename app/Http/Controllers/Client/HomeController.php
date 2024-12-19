<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $movie = MovieModel::paginate(4);
        $popular_movie = MovieModel::where("new_release", "2")->get();
        $new_release = MovieModel::where("new_release", "0")->get();
        return view("client.pages.home", compact('movie', 'popular_movie', 'new_release'));
    }
}
