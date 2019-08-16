

<?php
use App\DataTables\UsersDataTable;

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
    return view('welcome');
});

Route::get('users3', function(UsersDataTable $dataTable) {
    return $dataTable->render('users.users3');
});
Route::get('users-list','UsersController@userList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
