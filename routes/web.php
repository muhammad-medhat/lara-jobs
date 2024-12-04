<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
// Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
// Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create');
// Route::get('/jobs/{id}', [JobsController::class, 'show'])->whereNumber('id')->name('jobs.show');

Route::resource('/jobs', JobsController::class);
Route::get('/test', function (Request $req) {
    return [
        'method' => $req->method(),
        'url' => $req->url(),
        'path' => $req->path(),
        'fullUrl' => $req->fullUrl(),
        'ip' => $req->ip(),
        'userAgent' => $req->userAgent(),
        'header' => $req->header(),
    ];
});