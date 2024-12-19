<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MoviesController;
use App\Http\Controllers\Client\SeatplanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/list', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('edit');
    Route::post('/admin/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::post('/admin/delete/{id}', [AdminController::class, 'delete'])->name('delete');

    Route::prefix('/movie')->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('movie.add');
        Route::post('/', [MovieController::class, 'add'])->name('movie.store');
        Route::get('/list', [MovieController::class, 'list'])->name('movie.list');
        Route::get('/edit/{id}', [MovieController::class, 'edit'])->name('movie.edit');
        Route::post('/update/{id}', [MovieController::class, 'update'])->name('movie.update');
        Route::post('/delete/{id}', [MovieController::class, 'delete'])->name('movie.delete');
    });
    
    // country routes
    // Route::get('/countries', [CountryController::class, 'countries'])->name('countries');
    Route::get('/states', [CountryController::class, 'states'])->name('states');
    Route::get('/cities/{id}', [CountryController::class, 'cities'])->name('cities');
});

// Client routes 
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/movie-details/{id}', [MoviesController::class, 'movie_details'])->name('movie.details');
Route::get('/categories', [MoviesController::class, 'categories'])->name('movie.categories');
Route::get('/all-movies', [MoviesController::class, 'all_movies'])->name('all.movies');

// Seat plan routes
Route::get('/movie/seatplan/{id}',[MoviesController::class,'seat_plan'])->name('movie.seatplan');

Route::post('/seat-plan/booking-details',[SeatplanController::class,'index'])->name('seatplan.seatnumber');
Route::get('/404', function () {
    return view('errors.404');
});

require __DIR__ . '/auth.php';
