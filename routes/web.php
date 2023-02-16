<?php
use App\Http\Controllers\TourController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ItineraryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [TourController::class,'index']);
// Route::get('/create', [TourController::class, 'create']);
// Route::post('/store', [TourController::class, 'store']);
// Route::resource('/', TourController::class);
//Route::resource('tours',TourController::class);

// Route::prefix('/tours')->group(function() {
//     Route::get('/', [TourController::class,'index'])->name('index');
//     Route::get('/create', [TourController::class, 'create'])->name('create');
//     Route::post('/store', [TourController::class, 'store'])->name('store');
// });
// Route::prefix('/hotels')->group(function() {
//     Route::get('/', [HotelController::class,'index'])->name('index');
//     Route::get('/create', [HotelController::class, 'create'])->name('create');
//     Route::post('/store', [HotelController::class, 'store'])->name('store');
// });
// Route::prefix('/flights')->group(function() {
//     Route::get('/', [FlightController::class,'index'])->name('index');
//     Route::get('/create', [FlightController::class, 'create'])->name('create');
//     Route::post('/store', [FlightController::class, 'store'])->name('store');
// });
Route::get('/', function () {
    return view('home');
});
Route::resource('tours', TourController::class);
Route::resource('flights', FlightController::class);
Route::resource('hotels', HotelController::class);
Route::resource('itinerary', ItineraryController::class);
Route::get('/tours/details', function () {
    return view('details');
});
Route::get('/itinerary/create/{tour_id}',[ItineraryController::class, 'create'] );