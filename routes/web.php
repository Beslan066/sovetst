<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news', [\App\Http\Controllers\HomeController::class, 'news'])->name('news');
Route::get('/news/{post}', [\App\Http\Controllers\HomeController::class, 'single'])->name('newsSingle');
Route::get('/team', [\App\Http\Controllers\HomeController::class, 'team'])->name('team');
Route::get('/presidium-team', [\App\Http\Controllers\HomeController::class, 'presidiumTeam'])->name('presidiumTeam');
Route::get('/document', [\App\Http\Controllers\HomeController::class, 'document'])->name('documents');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth', 'verified', 'admin']], function () {
    Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

    Route::group(['namespace' => 'Category', 'prefix' => 'admin'], function () {
        Route::get('/categories', [\App\Http\Controllers\Admin\Category\IndexController::class, '__invoke'])->name('admin.categories.index');
        Route::get('/categories/create', [\App\Http\Controllers\Admin\Category\CreateController::class, '__invoke'])->name('admin.categories.create');
        Route::post('/categories/store', [\App\Http\Controllers\Admin\Category\StoreController::class, '__invoke'])->name('admin.categories.store');
        Route::get('/categories/{categories}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, '__invoke'])->name('admin.categories.edit');
        Route::patch('/categories/{categories}', [\App\Http\Controllers\Admin\Category\UpdateController::class, '__invoke'])->name('admin.categories.update');
        Route::delete('/categories/{categories}', [\App\Http\Controllers\Admin\Category\DestroyController::class, '__invoke'])->name('admin.categories.delete');
    });

    Route::group(['namespace' => 'Post', 'prefix'=>'admin'], function () {
        Route::get('/post', [\App\Http\Controllers\Admin\Post\IndexController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/create', [\App\Http\Controllers\Admin\Post\CreateController::class, '__invoke'])->name('admin.post.create');
        Route::get('/post/{post}', [\App\Http\Controllers\Admin\Post\ShowController::class, '__invoke'])->name('admin.post.show');
        Route::post('/post/store', [\App\Http\Controllers\Admin\Post\StoreController::class, '__invoke'])->name('admin.post.store');
        Route::get('/post/{post}/edit', [\App\Http\Controllers\Admin\Post\EditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/post/{post}', [\App\Http\Controllers\Admin\Post\UpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/post/{post}', [\App\Http\Controllers\Admin\Post\DestroyController::class, '__invoke'])->name('admin.post.delete');
        Route::post('/filter-posts', [\App\Http\Controllers\Admin\Post\FilterController::class, '__invoke'])->name('admin.post.filter');
    });
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
