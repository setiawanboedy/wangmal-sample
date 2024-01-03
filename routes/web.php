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
->namespace('App\Http\Controllers')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
])->group(function (){
    Route::get('/masters/asbab', 'AsbabController@index')->name('masters.asbab.index');

    Route::get('/masters/program', function () {
        return view('masters.program.index');
    })->name('masters.program.index');

    Route::get('/donate', function () {
        return view('donate.index');
    })->name('donate.index');

    Route::get('rekap/report', function () {
        return view('rekap.report.index');
    })->name('rekap.report.index');

    Route::get('rekap/asbab', function () {
        return view('rekap.asbab.index');
    })->name('rekap.asbab.index');

    Route::get('/rekening', function () {
        return view('rekening.index');
    })->name('rekening.index');

    Route::get('/kwitansi', function () {
        return view('donate.kwitansi');
    })->name('donate.kwitansi');
});