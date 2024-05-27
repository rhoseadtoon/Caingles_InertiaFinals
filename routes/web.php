<?php

use App\Http\Controllers\CellphoneController;
use App\Http\Controllers\LaptopController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/home', function(){
    return Inertia('Home');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/home', function(){
        return Inertia('Home');
    });

    Route::get('/cellphones', [CellphoneController::class, 'index']);
    Route::get('/laptops', [LaptopController::class, 'index']);

    Route::post('/cellphones', [CellphoneController::class, 'store'])->name('cellphones.store');
    Route::resource('cellphones', CellphoneController::class);

    Route::get('/cellphones/{cellphone}', [CellphoneController::class, 'show'])->name('cellphones.show');
    Route::put('/cellphones/{cellphone}', [CellphoneController::class, 'update'])->name('cellphones.update');
    Route::delete('/cellphones/{cellphone}', [CellphoneController::class, 'destroy']);

});



require __DIR__.'/auth.php';
