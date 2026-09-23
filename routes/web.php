<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class,'index']);

Route::get('/create', [MemberController::class, 'showCreate']);
Route::post('/createUser', [MemberController::class,'createUser']);

Route::get('/edit/{userId}', [MemberController::class,'showEdit']);
Route::post('/editUser/{userId}', [MemberController::class,'editUser']);

Route::post('/deleteUser/{userId}', [MemberController::class,'deleteUser']);





