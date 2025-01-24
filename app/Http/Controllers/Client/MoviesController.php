<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\MovieModel;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function categories()
    {
        $movie = MovieModel::orderBy("created_at", "asc")->paginate(4);
        $movieDesc = MovieModel::orderBy("created_at", "desc")->paginate(4);
        $movie_category = CategoryModel::all();
        return view("client.pages.movies", compact('movie', 'movie_category', 'movieDesc'));
    }
    public function movie_categories(Request $request)
    {
        $moviesAsPerCategory = MovieModel::where('movie_category', 'LIKE', "%{$request->category}%")->paginate(3);
        $html = '';
        foreach ($moviesAsPerCategory as  $item) {
            $html .= ' 
        <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
            <div class="slider-info">
                <div class="img-circle">
                    <a href="movies.html">
                        <img src=" ' . asset($item->movie_banner) . ' " class="img-fluid" alt="author image">
                            <div class="overlay-icon">
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </div>
                     </a>
                </div>
                <div class="message">
                    <p>English</p>
                    <a class="author-book-title" href="movies.html">' . $item->movie_name . '</a><br>
                        <span class="post"></span><span class="fa fa-clock-o"> </span>
                            ' . substr($item->movie_duration, 0, 2) . ' Hr
                            ' . substr($item->movie_duration, 3) . ' Min</span>
                        <span class="post fa fa-heart text-right"></span>
                            </h4>
                </div>
            </div>
        </div>';
        }
        return response()->json([
            'success' => true,
            'html' => $html,
        ]);
    }
    public function movie_details(Request $request)
    {
        $movie_details = MovieModel::where("id", $request->id)->first();
        return view("client.pages.movie-details", compact("movie_details"));
    }
    public function all_movies()
    {
        $all_movies = MovieModel::all();
        return view("client.pages.all_movies", compact("all_movies"));
    }
}
