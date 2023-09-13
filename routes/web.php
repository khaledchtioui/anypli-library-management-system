<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
  //  Route::resource('roles', RoleController::class);
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');;
    Route::get('/roles/{id}', [RoleController::class, 'show'])->name('roles.show');
    Route::get('/rolesedit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
    Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('/rolescreate', [RoleController::class, 'create'])->name('roles.create');
    Route::patch('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');


});




require __DIR__.'/auth.php';
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload','index');
    Route::post('/upload', [ImageController::class, 'upload'])->name('upload.image');
});

Route::get('/borrowing/create', [BorrowingController::class, 'create'])->name('borrowings.create');
Route::post('/borrowings', [BorrowingController::class, 'store'])->name('borrowings.store');
Route::get('/borrowing', [BorrowingController::class, 'index'])->name('borrowings.index');;
Route::get('/borrowingedit/{borrowing}', [BorrowingController::class, 'edit'])->name('borrowings.edit');
Route::delete('/borrowings/{borrowing}', [BorrowingController::class, 'destroy'])->name('borrowings.destroy');
Route::put('/borrowings/{borrowing}', [BorrowingController::class, 'update'])->name('borrowings.update');

Route::get('/books', [BookController::class, 'index'])->name('books.index');;
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [BookController::class, 'show']);
Route::get('/booksedit/{book}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);
Route::get('/bookss', [VisitorController::class, 'index'])->name('bookss.index');
Route::get('/bookss/cart', [VisitorController::class, 'cart'])->name('bookss.cart');
Route::get('/bookss/{id}', [VisitorController::class, 'show'])->name('books.show');
//Route::get('/booksfilter', [VisitorController::class, 'filterBooks'])->name('books.filter');
//Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/usersedit/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::PATCH('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('/userscreate', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

//Route::resource('users', UserController::class);
