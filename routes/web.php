<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profile = Profile::first();
    return view('cv', compact('profile'));
});