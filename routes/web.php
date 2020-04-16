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
Route::group(['middleware' => ['install']], function () {

    // ::::::::::::::::::::::::::::::::::: This Route Group is for FrontEnd Setup :::::::::::::::::::::::::::
    Route::get('/', 'Frontend\FrontEndController@index')->name('index');
    Route::group(['as' => 'member.', 'prefix' => 'member', 'namespace' => 'Frontend'], function () {
	
    });

    // Settings
    Route::get('settings', 'Admin\SettingsController@index')->name('admin.settings');
    Route::get('settings/configure', 'Admin\SettingsController@configure')->name('admin.settings.configure');


});

Route::get('pre-setup', 'Install\InstallController@index');
Route::get('pre-setup/database', 'Install\InstallController@database');
Route::post('pre-setup/process_install', 'Install\InstallController@process_install');
Route::post('pre-setup/store_user', 'Install\InstallController@store_user');
Route::post('pre-setup/finish', 'Install\InstallController@final_touch');