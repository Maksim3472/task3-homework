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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return 'тестов не будет';
// });

// Route::get('/dir/test', function () {
//     return 'тесты будут';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'пользователь: ' . $name;
// });

// Route::get('/user/{surname}/{name}', function ($surname, $name) {
//     return 'пользователь: ' . $surname . ' ' . $name;
// });

// Route::get('/city/{city?}', function ($city = 'Minsk') {
//     return 'город: ' . $city;
// });

// Route::get('/user/{id}', function ($id) {
//     return 'пользователь: ' . $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'пользователь: ' . $id . $name;
// })->where('id', '[0-9]+')->where('name', '[a-z]{3,}');

// Route::get('/posts/{date}', function ($date) {
//     return 'дата: ' . $date;
// })->where('date', '\d{4}(-|\/)\d{2}(-|\/)\d{2}');

// Route::get('/posts/{year}/{month}/{day}', function ($year, $month, $day) {
//     return 'год/месяц/день: ' . $year . '/' . $month . '/' . $day;
// })->where('year', '[0-9]{4}')->where('month', '[0-9]{2}')->where('day', '[0-9]{2}');

// Route::get('/user/{order}', function ($order) {
//     return 'что-то 1:' . $order;
// })->where('order', 'name|surname|age');

// Route::get('/user/{id}', function ($id) {
//     return 'id: ' . $id;
// })->whereNumber('id');

// Route::get('/city/{name}', function ($name) {
//     return 'city: ' . $name;
// })->whereAlpha('name');

// Route::get('/post/{slug}', function ($slug) {
//     return '!!!';
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function ($id) {
//         return 'all';
//     });
//     Route::get('/user/{id}', function ($id) {
//         return $id;
//     });
// });

// Route::get('/user/profile', function () {
//     return 'profile';
// })->name('user');




use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'show']);
// Route::get('/user/all', [UserController::class, 'all']);

// Route::get('/user/{name}', [UserController::class, 'show_name']);

// Route::get('/user/{surname}/{name}', [UserController::class, 'show_surname_name']);

// Route::get('/user/{name}', [UserController::class, 'show_names']);




// Route::get('/user/{name}/{surname}', [UserController::class, 'user']);

Route::get('/name', [UserController::class, 'name']);
Route::get('/surname', [UserController::class, 'surname']);
Route::get('/salary', [UserController::class, 'salary']);