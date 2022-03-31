<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ShoeController as AdminShoeController;
use App\Http\Controllers\User\ShoeController as UserShoeController;
// this is for the clothing
// use App\Http\Controllers\Admin\ClothingController as AdminClothingController;
// use App\Http\Controllers\User\ClothingController as UserClothingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/about', [PageController::class, 'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/user/shoes/', [UserShoeController::class, 'index'])->name('user.shoes.index');
Route::get('/user/shoes/{id}', [UserShoeController::class, 'show'])->name('user.shoes.show');
Route::get('/user/shoes/{id}/buy', [UserShoeController::class, 'buy'])->name('user.shoes.buy');
Route::get('/user/shoes/{id}/bid', [UserShoeController::class, 'bid'])->name('user.shoes.bid');
Route::get('/user/shoes/{id}/sell', [UserShoeController::class, 'sell'])->name('user.shoes.sell');

Route::get('/admin/shoes/', [AdminShoeController::class, 'index'])->name('admin.shoes.index');
Route::get('/admin/shoes/create', [AdminShoeController::class, 'create'])->name('admin.shoes.create');
Route::get('/admin/shoes/{id}', [AdminShoeController::class, 'show'])->name('admin.shoes.show');
Route::post('/admin/shoes/store', [AdminShoeController::class, 'store'])->name('admin.shoes.store');
Route::get('/admin/shoes/{id}/edit', [AdminShoeController::class, 'edit'])->name('admin.shoes.edit');
Route::put('/admin/shoes/{id}', [AdminShoeController::class, 'update'])->name('admin.shoes.update');
Route::delete('/admin/shoes/{id}', [AdminShoeController::class, 'destroy'])->name('admin.shoes.destroy');



// THIS IS FOR THE CLOTHING


// Route::get('/user/clothes/', [UserClothingController::class, 'index'])->name('user.clothes.index');
// Route::get('/user/clothes/{id}', [UserClothingController::class, 'show'])->name('user.clothes.show');
// Route::get('/user/clothes/{id}/buy', [UserClothingController::class, 'buy'])->name('user.clothes.buy');
// Route::get('/user/clothes/{id}/bid', [UserClothingController::class, 'bid'])->name('user.clothes.bid');
// Route::get('/user/clothes/{id}/sell', [UserClothingController::class, 'sell'])->name('user.clothes.sell');

// Route::get('/admin/clothes/', [AdminClothingController::class, 'index'])->name('admin.clothes.index');
// Route::get('/admin/clothes/create', [AdminClothingController::class, 'create'])->name('admin.clothes.create');
// Route::get('/admin/clothes/{id}', [AdminClothingController::class, 'show'])->name('admin.clothes.show');
// Route::post('/admin/clothes/store', [AdminClothingController::class, 'store'])->name('admin.clothes.store');
// Route::get('/admin/clothes/{id}/edit', [AdminClothingController::class, 'edit'])->name('admin.clothes.edit');
// Route::put('/admin/clothes/{id}', [AdminClothingController::class, 'update'])->name('admin.clothes.update');
// Route::delete('/admin/clothes/{id}', [AdminClothingController::class, 'destroy'])->name('admin.clothes.destroy');