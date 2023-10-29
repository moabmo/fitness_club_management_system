<?php

use App\Http\Controllers\PackagesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MybookController;
use App\Http\Controllers\AboutController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecommendationsController;

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

Route::get('/admin', function(){
    return view('admin');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/packages', [PackagesController::class, 'store']);

Route::get('/packages/create', [PackagesController::class, 'create']);

Route::get('/packages', [PackagesController::class,'index']);

Route::get('/packages/{package}/edit', [PackagesController::class, 'edit']);

Route::put('/packages/{package}', [PackagesController::class, 'update']);

Route::delete('/packages/{package}', [PackagesController::class, 'destroy']);


// Book
Route::get('/book', [BookController::class,'book']);

Route::post('add', [BookController::class, 'addData']);



// Route for displaying member's books
Route::get('/books', [MybookController::class,'mybook']);


// // ==============================================================================
// ================================

//Recommendation!!!

// Route::get('/recommend', [HomeController::class,'recommend']);




Route::get('/recommend', [RecommendationsController::class,'recommend']);

Route::get('/recommendations', [RecommendationsController::class,'index']);


/* 
    => Add a Recommendation
*/
Route::post('/recommendations', [RecommendationsController::class, 'store']);

Route::get('/recommendations/create', [RecommendationsController::class, 'create']);

Route::get('/recommendations/{recommendation}/edit', [RecommendationsController::class, 'edit']); /* Edit Recommendation */

Route::put('/recommendations/{recommendation}', [RecommendationsController::class, 'update']);

Route::delete('/recommendations/{recommendation}', [RecommendationsController::class, 'destroy']);

// Display systems recommendations
Route::get('/myrecommendation', [RecommendationsController::class,'myrecommendation']);

// Route::post('/myrecommendation', [RecommendationsController::class,'myrecommendation']);





/*
About.. This is the site's about page
*/
Route::get('/about', [AboutController::class,'about']);

