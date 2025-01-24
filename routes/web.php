<?php

use App\Http\Controllers\AboutUscontroller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\BookingDetailsController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\MultiplexController;
use App\Http\Controllers\Admin\ShowController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TicketpriceController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\MoviesController;
use App\Http\Controllers\Client\MultiplexController as ClientMultiplexController;
use App\Http\Controllers\Client\SeatplanController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('user/dashboard', [DashboardController::class, 'user_index'])->name('dashboard')->middleware('auth');
Route::post('user/dashboard/delete/{bookingDetailsModel}', [DashboardController::class, 'delete'])->name('user.record.delete')->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->group(function () {
    // Roles 
    Route::get('roles', [RoleController::class, 'index'])->name('role.index'); // List all roles
    Route::get('roles/create', [RoleController::class, 'create'])->name('role.create'); // Show form to create a new role
    Route::post('roles', [RoleController::class, 'store'])->name('role.store'); // Store new role
    Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->name('role.edit'); // Show form to edit a role
    Route::put('roles/{role}', [RoleController::class, 'update'])->name('role.update'); // Update an existing role
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('role.destroy'); // Delete a role


    // Permissions
    Route::get('permissions', [RoleController::class, 'permissionIndex'])->name('permission.index');
    Route::get('permissions/create', [RoleController::class, 'permissionCreate'])->name('permission.create');
    Route::post('permissions', [RoleController::class, 'permissionStore'])->name('permission.store');
    Route::get('permissions/{permission}/edit', [RoleController::class, 'permissionEdit'])->name('permission.edit');
    Route::put('permissions/{permission}', [RoleController::class, 'permissionUpdate'])->name('permission.update');
    Route::delete('permissions/{permission}', [RoleController::class, 'permissionDestroy'])->name('permission.destroy');


    Route::middleware(['role:admin'])->prefix('/admin')->group(function () {
        Route::get('/list', [AdminController::class, 'index'])->name('admin');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');
        Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    });

    Route::prefix('/movie')->group(function () {
        Route::get('/', [MovieController::class, 'index'])->name('movie.add');
        Route::post('/', [MovieController::class, 'add'])->name('movie.store');
        Route::get('/list', [MovieController::class, 'list'])->name('movie.list');
        Route::get('/edit/{id}', [MovieController::class, 'edit'])->name('movie.edit');
        Route::post('/update/{id}', [MovieController::class, 'update'])->name('movie.update');
        Route::post('/delete/{id}', [MovieController::class, 'delete'])->name('movie.delete');
    });

    // Multiplex routes
    Route::prefix('/multiplex')->group(function () {
        Route::get('/', [MultiplexController::class, 'index'])->name('multiplex.add');
        Route::post('/', [MultiplexController::class, 'add'])->name('multiplex.store');
        Route::get('/list', [MultiplexController::class, 'list'])->name('multiplex.list');
        Route::get('/edit/{id}', [MultiplexController::class, 'edit'])->name('multiplex.edit');
        Route::post('/update/{id}', [MultiplexController::class, 'update'])->name('multiplex.update');
        Route::post('/delete/{id}', [MultiplexController::class, 'delete'])->name('multiplex.delete');
    });
    Route::prefix('/ticketprice')->group(function () {
        Route::get('/', [TicketpriceController::class, 'index'])->name('ticketprice.add');
        Route::post('/', [TicketpriceController::class, 'add'])->name('ticketprice.store');
        Route::get('/list', [TicketpriceController::class, 'list'])->name('ticketprice.list');
        Route::get('/edit/{id}', [TicketpriceController::class, 'edit'])->name('ticketprice.edit');
        Route::post('/update/{id}', [TicketpriceController::class, 'update'])->name('ticketprice.update');
        Route::post('/delete/{id}', [TicketpriceController::class, 'delete'])->name('ticketprice.delete');
    });
    // country routes
    // Route::get('/countries', [CountryController::class, 'countries'])->name('countries');
    Route::get('/states', [CountryController::class, 'states'])->name('states');
    Route::get('/cities/{id}', [CountryController::class, 'cities'])->name('cities');

    Route::prefix('shows')->group(function () {
        Route::get('', [ShowController::class, 'list'])->name('shows.list');
        Route::get('create', [ShowController::class, 'add'])->name('shows.add');
        Route::post('store', [ShowController::class, 'store'])->name('shows.store');
        Route::get('edit/{show}', [ShowController::class, 'edit'])->name('shows.edit');
        Route::put('update/{show}', [ShowController::class, 'update'])->name('shows.update');
        Route::delete('delete/{show}', [ShowController::class, 'delete'])->name('shows.delete');
    });

    Route::resource('tickets', TicketController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('bookingdetails', BookingDetailsController::class);
});

// Client routes 
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/movie-details/{id}', [MoviesController::class, 'movie_details'])->name('movie.details');
Route::get('/categories', [MoviesController::class, 'categories'])->name('movie.categories');
Route::get('/categories/type', [MoviesController::class, 'movie_categories'])->name('movie.categories.type');
Route::get('/all-movies', [MoviesController::class, 'all_movies'])->name('all.movies');

// Multiplex 
Route::get('/movie/multiplex/{id}', [ClientMultiplexController::class, 'index'])->name('multiplex.select');

// Seat plan routes
Route::get('/movie/seatplan/{id}', [SeatplanController::class, 'seat'])->name('movie.seatplan');
Route::post('/movie/seatplan/{id}', [SeatplanController::class, 'seat_plan'])->name('movie.seatplan.post');

Route::post('/seat-plan/booking-details', [SeatplanController::class, 'index'])->name('seatplan.seatnumber');

// checkout route
Route::post('/movie/checkout', [CheckoutController::class, 'index'])->name('movie.checkout');
Route::get('/movie/checkout/confirmation', [CheckoutController::class, 'confirmation'])->name('movie.confirmation');

// Booking Details
Route::post('/booking-details', [CheckoutController::class, "bookingdetails"])->name('movie.bookingdetails');

// About us
Route::get('/about-us', [AboutUscontroller::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
Route::view('/404', 'errors.404')->name('404');


require __DIR__ . '/auth.php';
require __DIR__ . '/admin-auth.php';
