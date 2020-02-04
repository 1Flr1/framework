<?php

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
    return view('auth/login');
});
Route::get('1', function () {
    return 'welcome';
});

Route::get('liste_users', function () {
    $utilisateurs = App\User::all();
    return view('liste_users', [
        'liste' => $utilisateurs
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'UserController@afficher');

// Route::get('/liste_users', 'UserController@afficher_liste');