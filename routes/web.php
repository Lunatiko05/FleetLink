<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('FleetLink/', function () {
    return view('FleetLink');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about-us', function () {
    return view('AboutUs'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('about-us');

Route::get('/FAQs', function () {
    return view('FAQs'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('FAQs');

Route::get('/Login', function () {
    return view('Login'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('Login');

Route::get('/FleetLink', function () {
    return view('FleetLink'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('FleetLink');

Route::get('/Admin_Landing', function () {
    return view('Admin_Landing'); // Assumes "AboutUs.blade.php" is in the "resources/views" directory.
})->name('Admin_Landing');

require __DIR__.'/auth.php';
