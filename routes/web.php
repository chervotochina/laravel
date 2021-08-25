<?php

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



Route::get('/', function () {
    return view('layouts.app');
});


Route::get('blade', function () {
    return view('layouts.child');
});













use App\Http\Controllers\UserController;

Route::get('/user/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');

use App\Http\Controllers\ProvisionServer;

Route::post('/server', ProvisionServer::class);





















    Route::get(/**
     * @param $postId
     * @param $commentId
     * @return string
     */ 'posts/{post}/comments/{comment?}', function ($postId, $commentId) {
        return 'Сумма '.($postId+$commentId);
});

    /*
Route::get('user/{name?}', function ($name = null) { // анонимная функция
    if ($name == null) {
        return 'юзера неет';
    }
    return 'User:'.$name;
})->where('name', '[0-9]+');
*/
	