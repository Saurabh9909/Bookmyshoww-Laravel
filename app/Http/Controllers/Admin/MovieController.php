<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MovieCategoryModel;
use App\Models\MovieModel;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\fileExists;

class MovieController extends Controller
{
    public function index()
    {
        $movie_category = MovieCategoryModel::all();
        return view("admin.pages.movie.add", compact("movie_category"));
    }
    public function add(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'movie_name' => 'string|max:255',
            'director' => 'string|max:255',
            'actor' => 'string|max:255',
            'release_date' => 'date|max:255',
            'movie_duration' => 'max:255',
            'movie_poster' => 'image|mimes:jpg,png|max:2048',
            'movie_banner' => 'image|mimes:jpg,png|max:2048'
        ]);
        if ($validator->fails()) {
            flash()->error("error");
            return redirect()->back()->with("errors", $validator->messages());
        }
        $movie = new MovieModel();
        if ($request->file('movie_poster')) {
            $file = $request->file('movie_poster');
            $file_extention = $file->getClientOriginalExtension();
            $movie_poster = rand(0, 10000) . '.' . $file_extention;
            $public_path = public_path("Movie_poster");
            $file->move($public_path, $movie_poster);
            $movie->movie_poster = "Movie_poster" . '/' . $movie_poster;
        } else {
            flash()->error("Having issue in movie poster upload");
            return redirect()->back();
        }
        if ($request->file('movie_banner')) {
            $file = $request->file('movie_banner');
            $file_extention = $file->getClientOriginalExtension();
            $movie_banner = rand(0, 10000) . '.' . $file_extention;
            $public_path = public_path("Movie_banner");
            $file->move($public_path, $movie_banner);
            $movie->movie_banner = "Movie_banner" . '/' . $movie_banner;
        } else {
            flash()->error("Having issue in movie banner upload");
            return redirect()->back();
        }
        $movie->movie_name = $request->movie_name;
        $movie->director = $request->director;
        $movie->actor = $request->actor;
        $movie->release_date = $request->release_date;
        $movie->movie_duration = $request->movie_duration;
        $movie->new_release = $request->new_release;
        $movie->movie_description = $request->movie_description;
        $movie->movie_category = implode(",", $request->movie_category);

        $movie->save();
        flash()->success("Movie added successfully");
        return redirect()->route('movie.list');
    }


    public function list()
    {
        $movie = MovieModel::orderBy('created_at', "desc")->get();
        return view('admin.pages.movie.list', compact('movie'));
    }
    public function edit(Request $request)
    {
        $movie = MovieModel::where("id", $request->id)->get();
        $movie_category = MovieCategoryModel::all();
        foreach ($movie as $key => $value) {
            $movie = $value;
            return view("admin.pages.movie.edit", compact("movie", "movie_category"));
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'movie_name' => 'string|max:255',
            'director' => 'string|max:255',
            'actor' => 'string|max:255',
            'release_date' => 'date|max:255',
            'movie_duration' => 'max:255'
        ]);
        if ($validator->fails()) {
            dd($validator->messages());
            flash()->error("error");
            return redirect()->back()->with("errors", $validator->messages());
        }
        $movie = MovieModel::where('id', $request->id)->first();
        if ($request->hasFile('movie_poster')) {
            if ($movie->movie_poster && file_exists($movie->movie_poster)) {
                unlink($movie->movie_poster);
            }
            $file = $request->file('movie_poster');
            $file_extention = $file->getClientOriginalExtension();
            $movie_poster = rand(0, 10000) . '.' . $file_extention;
            $public_path = public_path("Movie_poster");
            $file->move($public_path, $movie_poster);
            $movie->movie_poster = "Movie_poster/" . $movie_poster;
        } elseif (!$request->file("movie_poster")) {
            $movie->movie_poster = $movie->movie_poster;
        } else {
            flash()->error("Having issue in movie poster upload");
            return redirect()->back();
        }
        if ($request->hasFile('movie_banner')) {
            if ($movie->movie_banner && file_exists($movie->movie_banner)) {
                unlink($movie->movie_banner);
            }
            $file = $request->file('movie_banner');
            $file_extention = $file->getClientOriginalExtension();
            $movie_banner = rand(0, 10000) . '.' . $file_extention;
            $public_path = public_path("Movie_banner");
            $file->move($public_path, $movie_banner);
            $movie->movie_banner = "Movie_banner/" . $movie_banner;
        } elseif (!$request->file("movie_banner")) {
            $movie->movie_banner = $movie->movie_banner;
        } else {
            flash()->error("Having issue in movie banner upload");
            return redirect()->back();
        }

        $movie->movie_name = $request->movie_name;
        $movie->director = $request->director;
        $movie->actor = $request->actor;
        $movie->release_date = $request->release_date;
        $movie->movie_duration = $request->movie_duration;
        $movie->movie_category = implode(",", $request->movie_category);
        $movie->update();
        notyf()->success("Movie updated successfully");
        return redirect()->route('movie.list');
    }

    public function delete(Request $request)
    {
        $movie = MovieModel::where('id', $request->id)->first();
        if (fileExists($movie->movie_banner) && fileExists($movie->movie_poster)) {
            unlink($movie->movie_poster);
            unlink($movie->movie_banner);
        } else {
            flash()->error("Having issue in movie banner upload");
            return redirect()->back();
        }
        flash()->success("Movie deleted successfully");
        $movie->delete();
        return redirect()->back();
    }
}
