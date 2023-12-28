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
    $experiences = \App\Models\Experience::OrderBy('year', 'asc')->get();
    $projects = \App\Models\Project::OrderBy('date', 'asc')->get();
    return view('welcome', compact('about', 'user', 'skills', 'tools', 'experiences', 'projects'));
});

//project show
Route::get('/projects/{project}', function (\App\Models\Project $project) {
    return view('projects.show', compact('project'));
})->name('projects.show');
