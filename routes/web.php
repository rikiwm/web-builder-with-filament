<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/{slug}', [HomeController::class, 'show'])->name('show');
    Route::get('/post/{slug}', [ListController::class, 'list'])->name('post.detail');
    Route::get('/kelurahan/{slug}', [ListController::class, 'list_kelurahan']);
    // Route::get('/about', [HomeController::class, 'about'])->name('about');
    // Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    // Route::get('/services', [HomeController::class, 'services'])->name('services');
    // Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    // Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    // Route::get('/blog/{slug}', [HomeController::class, 'blogShow'])->name('blog.show');
    // Route::get('/blog/category/{slug}', [HomeController::class, 'blogCategory'])->name('blog.category');
    // Route::get('/blog/tag/{slug}', [HomeController::class, 'blogTag'])->name('blog.tag');
    // Route::get('/blog/search', [HomeController::class, 'blogSearch'])->name('blog.search');
    // Route::get('/blog/archive/{year}/{month}', [HomeController::class, 'blogArchive'])->name('blog.archive');
    // Route::get('/blog/author/{username}', [HomeController::class, 'blogAuthor'])->name('blog.author');
    // Route::get('/blog/rss', [HomeController::class, 'blogRss'])->name('blog.rss');
    // Route::get('/blog/sitemap', [HomeController::class, 'blogSitemap'])->name('blog.sitemap');
    // Route::get('/blog/{slug}/print', [HomeController::class, 'blogPrint'])->name('blog.print');
    // Route::get('/blog/{slug}/pdf', [HomeController::class, 'blogPdf'])->name('blog.pdf');
    // Route::get('/blog/{slug}/email', [HomeController::class, 'blogEmail'])->name('blog.email');
    // Route::get('/blog/{slug}/share', [HomeController::class, 'blogShare'])->name('blog.share');
    // Route::get('/blog/{slug}/report', [HomeController::class, 'blogReport'])->name('blog.report');
    // Route::get('/blog/{slug}/like', [HomeController::class, 'blogLike'])->name('blog.like');
    // Route::get('/blog/{slug}/dislike', [HomeController::class, 'blogDislike'])->name('blog.dislike');
});
