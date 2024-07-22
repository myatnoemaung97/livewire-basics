<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\HelloWorld;
use App\Livewire\Posts;
use App\Livewire\RegisterForm;
use App\Livewire\TodoList;
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

Route::get('/', HelloWorld::class);
Route::get('/counter', Counter::class);
Route::get('/posts', Posts::class);
Route::get('/posts/create', CreatePost::class);
Route::get('/todos', TodoList::class);
Route::get('/register', function () {
    return view('users');
});

Route::get('/test', function () {
    return view('placeholders.table-placeholder');
});

Route::get('/modals', function () {
    return view('modals');
});



