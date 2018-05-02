<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('exc', 'RouteController@exc');
Route::get('/', 'RouteController@index');
Route::get('login', 'RouteController@login');
Route::post('login', 'AdminController@login');
Route::get('dashboard', 'RouteController@dashboard');
Route::get('logout', 'AdminController@logout');

Route::get('detailadmin', 'RouteController@detailadmin');
Route::get('monitoring', 'RouteController@monitoring');
Route::get('prosesba', 'RouteController@prosesba');

//admin
Route::get('dashboardadmin', 'RouteController@dashboardadmin');
Route::get('tambahadmin', 'RouteController@tambahadmin');
//data-admin
Route::get('dataadmin', 'RouteController@dataadmin');
Route::get('dataadmincs', 'RouteController@dataadmincs');
Route::get('dataadminto', 'RouteController@dataadminto');
Route::get('dataadminsi', 'RouteController@dataadminsi');
Route::get('dataadminfi', 'RouteController@dataadminfi');
Route::get('datauser', 'RouteController@datauser');

//tambah-admin
Route::get('admin', 'RouteController@adminutama');
Route::get('admincs', 'RouteController@admincs');
Route::get('adminto', 'RouteController@adminto');
Route::get('adminsi', 'RouteController@adminsi');
Route::get('adminfi', 'RouteController@adminfi');
Route::get('user', 'RouteController@user');

//simpan-admin
Route::post('simpanutama', 'AdminController@simpanutama');
Route::post('simpancs', 'AdminController@simpancs');
Route::post('simpanto', 'AdminController@simpanto');
Route::post('simpansi', 'AdminController@simpansi');
Route::post('simpanfi', 'AdminController@simpanfi');
Route::post('simpanuser', 'AdminController@simpanuser');

//edit-admin
Route::get('editadmin/{id}', 'AdminController@editadmin');
Route::get('editadmincs/{id}', 'AdminController@editadmincs');
Route::get('editadminto/{id}', 'AdminController@editadminto');
Route::get('editadminsi/{id}', 'AdminController@editadminsi');
Route::get('editadminfi/{id}', 'AdminController@editadminfi');
Route::get('edituser/{id}', 'AdminController@edituser');

//barui-admin
Route::post('baruiadmin', 'AdminController@baruiadmin');
Route::post('baruiadminutama', 'AdminController@baruiadminutama');
Route::post('baruiadmincs', 'AdminController@baruiadmincs');
Route::post('baruiadminto', 'AdminController@baruiadminto');
Route::post('baruiadminsi', 'AdminController@baruiadminsi');
Route::post('baruiadminfi', 'AdminController@baruiadminfi');
Route::post('baruiuser', 'AdminController@baruiuser');

//delete-admin
Route::get('deleteadmin/{id}', 'AdminController@deleteadmin');

//detail-admin
Route::get('detaildata/{id}', 'AdminController@detaildata');

//customer service
Route::get('dashboardcs', 'RouteController@dashboardcs');
Route::get('monitoringcs', 'RouteController@monitoringcs');
Route::post('monitoringcs', 'AdminController@monitoringcs');
Route::get('entrycs', 'RouteController@entrycs');
Route::post('entrycs', 'AdminController@entrycs');
Route::get('datacs', 'RouteController@datacs');
Route::post('caridatacr', 'RouteController@caridatacr');
//terminal opration
Route::get('dashboardto', 'RouteController@dashboardto');
Route::get('entryto', 'RouteController@entryto');
Route::get('detailpengajuan/{id}', 'AdminController@detailpengajuan');
Route::get('abaikanto/{id}', 'AdminController@abaikanto');
Route::get('inputba/{id}', 'RouteController@inputba');
Route::post('entryto', 'AdminController@entryto');
Route::get('detailba/{id}', 'AdminController@detailba');
Route::get('datato', 'RouteController@datato');
Route::get('excelto/{id}', 'RouteController@excelto');
// Route::get('buatba/{id}', 'RouteController@buatba');
Route::post('carientryto', 'RouteController@carientryto');
Route::post('caridatato', 'RouteController@caridatato');

//sistem information
Route::get('dashboardsi', 'RouteController@dashboardsi');
Route::get('entrysi', 'RouteController@entrysi');
Route::post('inputsi','AdminController@inputsi');
Route::get('excelsi/{id}', 'RouteController@excelsi');
Route::get('inputsi/{id}', 'RouteController@inputsi');
Route::get('datasi', 'RouteController@datasi');
Route::get('detailsi/{id}', 'AdminController@detailsi');
Route::post('caridatasi', 'RouteController@caridatasi');
Route::get('abaikansi/{id}','AdminController@abaikansi');

//finance
Route::get('dashboardfi', 'RouteController@dashboardfi');
Route::get('entryfi', 'RouteController@entryfi');
Route::get('inputfi/{id}', 'RouteController@inputfi');
Route::get('datafi', 'RouteController@datafi');
Route::post('inputfi','AdminController@inputfi');
Route::get('detailfi/{id}', 'AdminController@detailfi');
Route::get('abaikanfi/{id}', 'AdminController@abaikanfi');

Route::get('buatba/{id}', 'AdminController@buat_ba');