<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Str;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Submit_acti;
use App\Models\Activities;

use App\Http\Controllers\CreatePortalController;

use App\Http\Controllers\StudentsController;
// use App\Http\Controllers\WelcomesController;



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

 // return view('welcome');

    // return Students::all();
    // return Teachers::all();
    // return Submit_acti::all();
    // return Activities::all();

// Route::get('/students', function () {
//     return view('students.index');
// });


// Route::get('show_students', [StudentsController::class, 'index']);


Auth::routes(['verify' => true]);

// INSIDE AFTER THE USER HAVE LOG IN
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');




// ADMIN
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function(){

});

// FOR ALL
Route::get('/', function (){
    return view('index');
});
Route::get('/select-a-role', function(){
    return view('auth.select-a-role');
});


// CREATING PORTAL CONTROLLER

Route::get('/create', function(){
    return view('createportal');
});