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
Route::prefix('msdDonations')->name('msdDonations.')->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    
    Route::group(['middleware' => ['XssSanitization']], function () {
        
        // Route::prefix('donate')->name('donate.')->group(function(){
        
            Route::view('/donations', 'donations')->name('donations');
            Route::post('/addDonationInformation', [App\Http\Controllers\Donations\DonationsController::class, 'insertData'])->name('addDonationInformation');
    
        // });
    });
    
    Route::prefix('common')->name('common.')->group(function(){
    
        Route::post('/countrylist', [App\Http\Controllers\common\commonFunctions::class, 'getAllCountries'])->name('countrylist');
        Route::post('/currencylist', [App\Http\Controllers\common\commonFunctions::class, 'getAllCurrencies'])->name('currencylist');
    
    });
});