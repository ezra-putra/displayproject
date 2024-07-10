<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\EventController;
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

Route::get('/', [DisplayController::class, 'display']);

Route::get('/information-admin', [AdminController::class, 'index']);

Route::get('/form-add-event', [AdminController::class, 'toAddEvent']);
Route::post('/add-event', [AdminController::class, 'createEvent'])->name('create.event');
Route::delete('/delete-event', [AdminController::class, 'deleteEvent'])->name('delete.event');
Route::get('/form-edit-event/{id}', [AdminController::class, 'toUpdateEvent']);
Route::put('/edit-event/{id}', [AdminController::class, 'updateEvent'])->name('update.event');


Route::get('/form-add-banner', [AdminController::class, 'toAddBanner']);
Route::post('/add-banner', [AdminController::class, 'createBanner'])->name('create.banner');
Route::delete('/delete-banner', [AdminController::class, 'deleteBanner'])->name('delete.banner');

Route::get('/login-admin', function () {
    return view('login');
});
