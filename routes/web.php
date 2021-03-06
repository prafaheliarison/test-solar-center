<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DamierContoller;

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


Route::match(['get', 'post'], 'damier', [DamierContoller::class, 'form'])->name('damier');
Route::match(['get', 'post'], 'tree-view', [TreeViewController::class, 'form'])->name('treeView');
