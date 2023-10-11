<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if(cache()->has('times')){
        $times = cache()->get('times');
    }else{
        $url = 'http://api.aladhan.com/v1/calendarByCity/' . date('Y/m');
        $response = Http::get($url, [
            'city' => 'Kishoreganj',
            'country' => 'Bangladesh',
            'method' => 4,
            'school' => 1,
        ]);
        $times = $response->object()->data;
        cache()->put('times', $times);
    }
    // dd($times);
    return view('home',[
        'times' => $times,
    ]);
});
Route::get('settings', function () {
    return view('settings');
});