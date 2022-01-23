<?php
use App\Http\Controllers\Profile\ProfileAvatarController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
Route::get('/profile', [ProfileInformationController::class, 'edit'])->name('profile');
Route::put('/profile', [ProfileInformationController::class, 'update'])->name('profile.update');

require __DIR__.'/auth.php';
