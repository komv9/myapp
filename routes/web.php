<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/komal', function () {
    return view('komal');
});

Route::get('/know-your-child', [App\Http\Controllers\KnowYourChildController::class, 'index']);

Route::get('/student', [App\Http\Controllers\StudInsertController::class, 'insert']);

Route::get('/create', [App\Http\Controllers\StudInsertController::class, 'create']);

Route::post('/store', [App\Http\Controllers\StudInsertController::class, 'store']);

Route::get('/see', [App\Http\Controllers\DataInsertController::class, 'see']);

Route::post('/upload', [App\Http\Controllers\DataInsertController::class, 'upload']);

Route::get('/fetch', [App\Http\Controllers\DataInsertController::class, 'fetch']);




//For fetching teacher details alongwith course details one-to-one relationship
Route::get('/tlist', [App\Http\Controllers\DataInsertController::class, 'tlist']);

Route::get('/edit/{id}', [App\Http\Controllers\DataInsertController::class, 'edit']);

Route::post('/update/{id}', [App\Http\Controllers\DataInsertController::class, 'update']);


//one to one relationship
// adding code for the course table
//operations to be performed
//list, add, edit, update
//creating a home page
Route::get('/home1', [App\Http\Controllers\CourseInsertController::class, 'home']);
Route::get('/add', [App\Http\Controllers\CourseInsertController::class, 'add']);
Route::post('/added', [App\Http\Controllers\CourseInsertController::class, 'added']);
Route::get('/list', [App\Http\Controllers\CourseInsertController::class, 'index']);
Route::get('/course-edit/{id}', [App\Http\Controllers\CourseInsertController::class, 'edit']);
Route::post('/course-update/{id}', [App\Http\Controllers\CourseInsertController::class, 'update']);
Route::get('/delete/{id}', [App\Http\Controllers\CourseInsertController::class, 'delete']);



//One to many relationship
//Employee and skills, employee_skill tables
//list and add routes
Route::get('/skills-add', [App\Http\Controllers\EmployeeController::class, 'add']);
Route::post('/employee_store', [App\Http\Controllers\EmployeeController::class, 'store']);
Route::get('/skills-list', [App\Http\Controllers\EmployeeController::class, 'list']);
Route::get('/employee_edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit']);
Route::post('/employee_update/{id}', [App\Http\Controllers\EmployeeController::class, 'update']);



//One to one relationship 
//artists and his cities
Route::get('/artist_add', [App\Http\Controllers\ArtistController::class, 'add']);
Route::post('/artist_store', [App\Http\Controllers\ArtistController::class, 'store']);
Route::get('/artist_list', [App\Http\Controllers\ArtistController::class, 'list']);
Route::get('/artist_edit/{id}', [App\Http\Controllers\ArtistController::class, 'edit']);
Route::post('/artist_update/{id}', [App\Http\Controllers\ArtistController::class, 'update']);

//One to many relationship
//kid and his hobbies
Route::get('/kid_add', [App\Http\Controllers\KidController::class, 'add']);
Route::post('/kid_store', [App\Http\Controllers\KidController::class, 'store']);
Route::get('/kid_list', [App\Http\Controllers\KidController::class, 'list']);
Route::get('/kid_edit/{id}', [App\Http\Controllers\KidController::class, 'edit']);
Route::post('/kid_update/{id}', [App\Http\Controllers\KidController::class, 'update']);


//file upload
Route::get('/cartoon_add', [App\Http\Controllers\CartoonController::class, 'add']);
Route::post('/cartoon_store', [App\Http\Controllers\CartoonController::class, 'store']);
Route::get('/cartoon_list', [App\Http\Controllers\CartoonController::class, 'list']);
Route::get('/cartoon_edit/{id}', [App\Http\Controllers\CartoonController::class, 'edit']);
Route::post('/cartoon_update/{id}', [App\Http\Controllers\CartoonController::class, 'update']);


//api movie names display list
//get method, controller, http link:function, fetch data from api, create table and store in database
Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);
Route::get('/movies_rate/{id}', [App\Http\Controllers\MovieController::class, 'rate']);
//Route::get('/movies_edit/{id}', [App\Http\Controllers\MovieController::class, 'edit']);
Route::post('/movies_update/{id}', [App\Http\Controllers\MovieController::class, 'update']);
Route::get('/movies_ratings/{id}', [App\Http\Controllers\MovieController::class, 'ratings']);


//username
//email
//phone_no
//rating
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//15th feb 2022 task
//form submission using ajax
Route::get('/members', [App\Http\Controllers\MemberController::class, 'add']);
Route::post('/submit_members', [App\Http\Controllers\MemberController::class, 'submit']);