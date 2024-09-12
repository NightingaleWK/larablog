<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Post;
use App\Livewire\TodoList;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
Route::get('/', TodoList::class);
Route::get('/counter', Counter::class);
Route::get('/post', Post::class);
Route::get('/createPost', CreatePost::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
