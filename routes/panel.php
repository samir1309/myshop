

<?php
Route::middleware('main')->group(function () {

Route::get('panel/login','Panel\LoginController@getlogin')->name('panel.login');
Route::post('panel/login','Panel\LoginController@postlogin')->name('panel.login');

Route::get('panel/register', 'Panel\LoginController@create')->name('panel.register');
Route::post('panel/register', 'Panel\LoginController@store')->name('panel.register');

Route::get('panel/confirm/{mobile}', 'Panel\LoginController@getConfirm')->name('panel.confirm');
Route::post('panel/confirm/', 'Panel\LoginController@postConfirm')->name('panel.confirm');

});



  
Route::namespace('Panel')->prefix('panel')->group(function () {
Route::middleware('PanelPermission')->group(function (){

Route::get('/dashboard', 'PanelController@dashboard')->name('panel.dashboard');



});
});
