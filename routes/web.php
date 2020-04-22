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

//  :::::::::::::::::::::: Check System Is Installed OR Not :::::::::::::::::::::::::::::::::::::::::::::::::
Route::group(['middleware' => ['install', 'ipFilter']], function () {

    // ::::::::::::::::::::::::::::::::::: This Route Group is for FrontEnd Setup :::::::::::::::::::::::::::
    Route::get('/', 'Frontend\FrontEndController@index')->name('index');
    Route::group(['as' => 'member.', 'prefix' => 'member', 'namespace' => 'Frontend'], function () {
	
    });

    // Admin Route
    Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    
        // Settings Route
        Route::group(['as' => 'settings.', 'prefix' => 'settings'], function () {
            Route::get('', 'SettingsController@index')->name('index');
            Route::get('/configure', 'SettingsController@configure')->name('configure');
            Route::post('/change-settings', 'SettingsController@change_settings')->name('change_settings');
            Route::get('/open_ip_filter', 'SettingsController@open_ip_filter')->name('open_ip_filter');
        });
        
    });

    
    // ::::::::::::::::::::::::::::::  IP Block Route ::::::::::::::::::::::::::::::::::::::::::::::::
    Route::get('ip-block', function() {
        return view('error.ip');
    })->name('ip_block');

});

// :::::::::::::::::::::::::: Installation Route :::::::::::::::::::::::::::::::::::::::::::::::::
Route::get('pre-setup', 'Install\InstallController@index');
Route::get('pre-setup/database', 'Install\InstallController@database');
Route::post('pre-setup/process_install', 'Install\InstallController@process_install');
Route::post('pre-setup/store_user', 'Install\InstallController@store_user');
Route::post('pre-setup/finish', 'Install\InstallController@final_touch');