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
    $about = \App\Models\About::first();
    $user = \App\Models\User::first();
    $skills = \App\Models\Skill::where('type', 'skill')->get();
    $tools = \App\Models\Skill::where('type', 'tool')->get();
    return view('welcome', compact('about', 'user', 'skills', 'tools'));
});
