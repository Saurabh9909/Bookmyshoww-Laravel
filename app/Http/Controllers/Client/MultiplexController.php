<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\MovieModel;
use App\Models\MultiplexModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MultiplexController extends Controller
{
    public function index(Request $request)
    {
        $multiplex = MultiplexModel::all();
        $movie_details = MovieModel::where('id', $request->id)->get();

        session([
            'movie_name' => $movie_details[0]->movie_name,
            'movie_duration' => $movie_details[0]->movie_duration,
            'movie_poster' => $movie_details[0]->movie_poster,
            'movie_id' => $movie_details[0]->id,
        ]);
        return view('client.pages.multiplex', compact('multiplex', 'movie_details'));
    }
}
