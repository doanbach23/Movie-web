<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route mặc định (trang chủ)
Route::get('/', function () {
    return redirect('/movies');
});


// Route danh sách phim
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

// Route thêm phim
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

// Route chỉnh sửa phim
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');

// Route xóa phim
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
