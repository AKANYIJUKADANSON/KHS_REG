<?php

use App\Http\Controllers\RegistrationController;
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


// Route::get('/', function(){
//     return view('welcome');
// });


// Index page (defines wea the application will start from)
Route::get('/', 'PagesController@index');


// Routing all the resourses in the registration controller
Route::resource('registration', 'RegistrationController');