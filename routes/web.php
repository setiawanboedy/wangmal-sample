<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('dashboard')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
])->group(function (){
    Route::get('/masters/asbab', function () {
        return view('masters.asbab.index');
    })->name('masters.asbab.index');

    Route::get('/masters/program', function () {
        return view('masters.program.index');
    })->name('masters.program.index');

    Route::get('/donate', function () {
        return view('donate.index');
    })->name('donate.index');

    Route::get('/report', function () {
        return view('report.index');
    })->name('report.index');

});