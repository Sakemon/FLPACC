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



Route::get('admin', array('uses' => 'HomeController@showLogin'));
Route::post('login',array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('as' => 'keluar', 'uses' => 'HomeController@doLogout'));

Route::get('flp{idplafond}', array('uses' => 'LoanController@CreditProgram'));
Route::get('LoanCustomer',array('before'=>'auth','uses' => 'LoanController@loan'));
Route::get('LoanEmployee',array('before'=>'auth','uses' => 'LoanController@LoanEmployee'));
Route::post('CustomerSave', array('before' => 'auth', 'uses' => 'LoanController@submit'));
Route::post('EmployeeSave', array('before' => 'auth', 'uses' => 'LoanController@submitmgu'));
Route::get('getmgu', array('uses' => 'LoanController@CreditMgu'));
Route::get('getmguacc', array('uses' => 'LoanController@CreditMguAcc'));
Route::get('menu', array('uses' => 'LoanController@FlpMenu'));

Route::get('viewpending', array('before' => 'auth', 'uses' => 'AdminController@viewpending'));
Route::get('viewaccept', array('before' => 'auth', 'uses' => 'AdminController@viewaccept'));
Route::get('viewrefuse', array('before' => 'auth', 'uses' => 'AdminController@viewrefuse'));

Route::get('viewpending/{idCustomer}/Accept', array('before' => 'auth', 'as' => 'Customer.Accept', 'uses' => 'AdminController@Accept'));
Route::get('viewpending/{idCustomer}/Refuse', array('before' => 'auth', 'as' => 'Customer.Refuse', 'uses' => 'AdminController@Refuse'));
Route::get('viewpending/{idCustomer}/Notes', array('before' => 'auth', 'as' => 'Customer.Notes', 'uses' => 'AdminController@Notes'));

Route::get('viewplafond', array('before' => 'auth', 'uses' => 'AdminController@viewplafond'));
Route::get('viewplafond/{idPlafond}/edit', array('before' => 'auth', 'as' => 'Plafond.Edit', 'uses' => 'AdminController@editplafond'));
Route::post('viewplafond/{idPlafond}/update', array('before' => 'auth', 'as' => 'Plafond.Update', 'uses' => 'AdminController@updateplafond'));

Route::get('viewtenor/{idPlafond}/view', array('before' => 'auth', 'as' => 'Tenor.View', 'uses' => 'AdminController@viewtenor'));
Route::get('viewtenor/{idTenor}/edit', array('before' => 'auth', 'as' => 'Tenor.Edit', 'uses' => 'AdminController@edittenor'));
Route::post('viewtenor/{idTenor}/update', array('before' => 'auth', 'as' => 'Tenor.Update', 'uses' => 'AdminController@updatetenor'));

Route::get('viewcatalogue', array('before' => 'auth', 'uses' => 'LoanController@ViewCatalogue'));
Route::get('viewpercar{idCar}', array('uses' => 'LoanController@ViewPerCar'));