<?php

use Illuminate\Http\Request;

//Pengguna
Route::post('DaftarPenggunaAPI','PenggunaController@DaftarPenggunaAPI');
Route::post('LoginPenggunaAPI','PenggunaController@LoginPenggunaAPI');
Route::post('TampilPenggunaAPI','PenggunaController@TampilPenggunaAPI');
Route::post('TampilFirebaseidAPI','PenggunaController@TampilFirebaseidAPI');

//Departemen
Route::post('TampilDepartemenAPI','DepartemenController@TampilDepartemenAPI');
Route::post('TampilIDDepartemenAPI','DepartemenController@TampilIDDepartemenAPI');

//Pengecekan
Route::post('TampilPengecekanAPI','PengecekanController@TampilPengecekanAPI');
Route::post('TampilTanggalPengecekanAPI','PengecekanController@TampilTanggalPengecekanAPI');
Route::post('TampilAssetAPI','PengecekanController@TampilAssetAPI');
Route::post('TambahPengecekanAPI','PengecekanController@TambahPengecekanAPI');
Route::post('TampilAssetStatusNormalAPI','PengecekanController@TampilAssetStatusNormalAPI');
Route::post('TampilAssetStatusRepairAPI','PengecekanController@TampilAssetStatusRepairAPI');
Route::post('TampilAssetStatusReplaceAPI','PengecekanController@TampilAssetStatusReplaceAPI');
Route::post('TampilHistoryAPI','PengecekanController@TampilHistoryAPI');
Route::post('UbahFlagPengecekanAPI','PengecekanController@UbahFlagPengecekanAPI');
Route::post('TampilTanggalPengecekanTerakhirAPI','AssetController@TampilTanggalPengecekanTerakhirAPI');
Route::post('TampilInboxSVAPI','PengecekanController@TampilInboxSVAPI');
Route::post('TampilInboxManagerAPI','PengecekanController@TampilInboxManagerAPI');
Route::post('UbahVerifSVAPI','PengecekanController@UbahVerifSVAPI');
Route::post('UbahVerifManagerAPI','PengecekanController@UbahVerifManagerAPI');
