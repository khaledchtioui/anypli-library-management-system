<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisitorController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload','index');
    Route::post('/upload', [ImageController::class, 'upload'])->name('upload.image');
});


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{book}', [BookController::class, 'show']);
Route::get('/books/{book}/edit', [BookController::class, 'edit']);
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);
Route::get('/bookss', [VisitorController::class, 'index'])->name('books.index');
Route::get('/bookss/{id}', [VisitorController::class, 'show'])->name('books.show');
Route::get('/booksfilter', [VisitorController::class, 'filterBooks'])->name('books.filter');
