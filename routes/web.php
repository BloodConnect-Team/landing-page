<?php

use App\Http\Controllers\Link;
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

Route::livewire('/', 'post.index')->name('index');
Route::livewire('/panduan-pengguna', 'post.userguide')->name('user_guide');
Route::livewire('/kebijakan-privasi', 'post.privacypolicy')->name('privacy_policy');
Route::livewire('/artikel/{slug}', 'post.artikel')->name('artikel');
// Route::livewire('/link/{slug}', 'post.link')->name('link');

Route::get('/link/{slug}', [Link::class, 'render'])->name('link');
Route::get('/download', [Link::class, 'ps'])->name('playstore');


