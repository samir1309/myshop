

<?php
Route::middleware('main')->group(function () {

Route::namespace('Panel')->prefix('panel')->group(function () {
Route::controller(LoginController::class)->name('panel.')->group(function () {
    Route::get('login', 'getlogin')->name('login');
    Route::post('login', 'postlogin')->name('login');
    
    Route::get('register', 'create')->name('register');
    Route::post('register', 'store')->name('register');

    Route::get('confirm/{mobile}', 'getConfirm')->name('confirm');
    Route::post('confirm', 'postConfirm')->name('confirm');
    

});
});

});


  
Route::namespace('Panel')->prefix('panel')->group(function () {
Route::middleware('PanelPermission')->group(function (){


Route::controller(PanelController::class)->name('panel.')->group(function () {
    Route::get('/logout', 'logout')->name('logout');
    Route::get('edit', 'edit')->name('edit');
    Route::post('edit', 'posteditinfo')->name('edit');
    Route::any('updatepassword', 'updatePassword')->name('updatepassword');
    Route::get('dashboard', 'dashboard')->name('dashboard');
});



});
});
