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


Route::get('/','HomeController@index')->name('home');
Route::get('workplace','WorkplaceController@index')->name('workplace');
Route::get('services-solution','ServiceSolutionController@index')->name('services-solution');
Route::get('overseas-construction-site','OverseasConstructionController@index')->name('overseas-construction-site');
Route::get('factory-infra-solutions','FactoryInfraController@index')->name('factory-infra-solutions');


