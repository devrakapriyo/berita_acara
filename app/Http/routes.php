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
Route::get('exportexcl/{id}', 'RouteController@exportexcl');
Route::get('/', 'RouteController@login');
Route::get('login', 'RouteController@login');
Route::post('login', 'AdminController@login');
Route::get('dashboard', 'RouteController@dashboard');
Route::get('logout', 'AdminController@logout');
Route::get('secureattempt/{id}', 'Auth\AuthController@emergency');

Route::get('detailadmin', 'RouteController@detailadmin');
Route::get('monitoring-load', 'RouteController@monitoring');
Route::post('carimonitoring', 'RouteController@carimonitoring');
Route::get('prosesba-load', 'RouteController@prosesba');
Route::post('cariprosesmonitoring', 'RouteController@cariprosesmonitoring');
Route::get('detailmonitoring/{id}', 'RouteController@detailmonitoring');
Route::get('monitoring', function(){
   return view('detailmonitoring'); 
});
route::get('prosesba', function(){
   return view('ajaxprosesmonitoring');
});

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
Route::get('editdetailcs/{id}', 'RouteController@editdetailcs');
Route::post('updatecs', 'AdminController@updatecs');
Route::get('editdetail/{id}', 'RouteController@editdetail');
Route::get('deletedetailcs/{id}', 'AdminController@deletedetailcs');
//terminal opration
Route::get('dashboardto', 'RouteController@dashboardto');
Route::get('entryto', 'RouteController@entryto');
Route::get('detailpengajuan/{id}', 'AdminController@detailpengajuan');
Route::get('abaikanto/{id}', 'AdminController@abaikanto');
Route::get('inputba/{id}', 'RouteController@inputba');
Route::post('inputba/{id}', 'AdminController@inputba');
Route::post('entryto', 'AdminController@entryto');
Route::get('detaildataba/{id}', 'RouteController@detaildataba');
Route::get('detailba/{id}', 'AdminController@detailba');
Route::get('datato', 'RouteController@datato');
Route::get('excelto/{id}', 'RouteController@excelto');
Route::get('buatbagagal/{id}', 'RouteController@buatba');
Route::post('carientryto', 'RouteController@carientryto');
Route::post('caridatato', 'RouteController@caridatato');
Route::get('detaildatato/{id}', 'RouteController@detaildatato');
Route::get('deletedatato/{id}', 'AdminController@deletedatato');

Route::get('editdatato/{id}', 'RouteController@editdatato');
Route::post('editdatato', 'AdminController@editdatato');
Route::get('editdetaildatato/{id}', 'RouteController@editdetaildatato');

Route::get('abaikanba/{id}','RouteController@abaikanba');
Route::post('abaikanba','AdminController@abaikanba');

//sistem information
Route::get('dashboardsi', 'RouteController@dashboardsi');
Route::get('entrysi', 'RouteController@entrysi');
Route::post('inputsi','AdminController@inputsi');
Route::get('excelsi/{id}', 'RouteController@excelsi');
Route::get('inputsi/{id}', 'RouteController@inputsi');
Route::get('detailinputsi/{id}', 'RouteController@detailinputsi');
Route::get('detailinputansi/{id}', 'RouteController@detailinputansi');
Route::get('datasi', 'RouteController@datasi');
Route::get('detailsi/{id}', 'AdminController@detailsi');
Route::get('detaildatasi/{id}', 'AdminController@detaildatasi');
Route::post('carisi', 'RouteController@carisi');
Route::post('caridatasi', 'RouteController@caridatasi');
Route::get('abaikansi/{id}','AdminController@abaikansi');
Route::get('deletedatasi/{id}', 'AdminController@deletedatasi');

Route::get('editdatasi/{id}', 'RouteController@editdatasi');
Route::get('editdetaildatasi/{id}', 'RouteController@editdetaildatasi');
Route::post('editdatasi', 'AdminController@editdatasi');

Route::get('abaikansi/{id}','RouteController@abaikansi');
Route::post('abaikansi','AdminController@abaikansi2');

//finance
Route::get('dashboardfi', 'RouteController@dashboardfi');
Route::get('entryfi', 'RouteController@entryfi');
Route::get('inputfi/{id}', 'RouteController@inputfi');
Route::get('datafi', 'RouteController@datafi');
Route::post('carifi', 'RouteController@carifi');
Route::post('caridatafi', 'RouteController@caridatafi');
Route::post('inputfi','AdminController@inputfi');
Route::get('detailinputfi/{id}', 'RouteController@detailinputfi');
Route::get('detaildatafi/{id}', 'RouteController@detaildatafi');
Route::get('detaildatafinance/{id}', 'RouteController@detaildatafinance');
Route::get('detailfi/{id}', 'AdminController@detailfi');
Route::get('abaikanfi/{id}', 'AdminController@abaikanfi');
Route::get('deletefi/{id}', 'AdminController@deletefi');

Route::get('buatba/{id}', 'AdminController@buat_ba');

Route::get('reportmonitoring','RouteController@reportmonitoring');

Route::get('hapusdata', 'RouteController@hapusdata');
Route::get('hapusdataba/{id}', 'AdminController@hapusdataba');
Route::post('caridataba', 'RouteController@caridataba');


Route::post('abaikan_rptto/{id}','AdminController@abaikan_rptto');
Route::post('abaikan_rptsi/{id}','AdminController@abaikan_rptsi');
Route::post('abaikan_rptfi/{id}','AdminController@abaikan_rptfi');

Route::get('editdatafi/{id}', 'RouteController@editdatafi');
Route::get('editdetaildatafi/{id}', 'RouteController@editdetaildatafi');
Route::post('editdatafi', 'AdminController@editdatafi');

Route::get('abaikanfi/{id}','RouteController@abaikanfi2');
Route::post('abaikanfi2','AdminController@abaikanfi2');

//truncate-data
Route::get('truncate', 'RouteController@truncate');
Route::get('truncatecs', 'RouteController@truncatecs');
Route::get('truncateto', 'RouteController@truncateto');
Route::get('truncatesi', 'RouteController@truncatesi');
Route::get('truncatefi', 'RouteController@truncatefi');
Route::get('truncatenomerpermohonan', 'RouteController@truncatenomerpermohonan');
Route::get('truncateprosesmonitoring', 'RouteController@truncateprosesmonitoring');
Route::get('truncatereport', 'RouteController@truncatereport');

Route::get('hapuscs', 'AdminController@hapuscs');
Route::get('hapusto', 'AdminController@hapusto');
Route::get('hapussi', 'AdminController@hapussi');
Route::get('hapusfi', 'AdminController@hapusfi');
Route::get('hapusnomerpermohonan', 'AdminController@hapusnomerpermohonan');
Route::get('hapusreport', 'AdminController@hapusreport');
Route::get('hapusprosesmonitoring', 'AdminController@hapusprosesmonitoring');

Route::post('chatt_cs', 'AdminController@chatt_cs');
Route::post('chatt_to', 'AdminController@chatt_to');
Route::post('chatt_si', 'AdminController@chatt_si');
Route::post('chatt_fi', 'AdminController@chatt_fi');