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
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('user.index');
// });

Auth::routes();
Route::get('/backend', 'HomeController@index')->name('backend');
Route::resource('/transaksi','jurnalumumcontroller');
Route::get('/laporan', function(){
    return view('admin.laporan');
});
Route::get('/pengaturan', function(){
    return view('admin.pengaturan');
});
Route::get('/neracasaldo-cetak', function(){
    return view('admin.kosong');
});


Route::resource('/user','UserpageController');
Route::resource('/jurnalumum','jurnalumumcontroller');
Route::resource('/akun','akuncontroller');

Route::resource('/bukubesar-cetak','bukubesarcontroller');
//Route::resource('/neracasaldo-cetak','neracacontroller');
Route::resource('/jurnalumum-cetak','jurnalumumcontroller2');

Route::post('simpandetail', 'CatatdendaController@simpandetail');

Route::get('/getData/{akun}','bukubesarcontroller@getDetail');
Route::get('/getData/{nmtlg}', 'CatatdendaController@getDetail');
Route::post('simpantrans', 'CatatdendaController@simpanTrans');
Route::get('/cetak-nota/{notrans}', 'CatatdendaController@cetaknotaku');