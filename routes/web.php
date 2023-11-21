<?php

use App\Http\Controllers\DashboardController;
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

/dashboard
/profile
/users
/feed

MVC - Model View Controller
Controller : Handle requests
Model : Handle data logic and intractions with database (Database)
View : What should be shown to the user (HTML and CSS code/ Blade files)

*/


Route::get('/', [DashboardController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
