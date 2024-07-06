<?php

use App\Models\Time;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $time = Time::query()
        ->where('city', 'Kishoreganj')
        ->where('month', date('m'))
        ->first();
    if ($time) {
        $times = $time->data;
    } else {
        $url = 'http://api.aladhan.com/v1/calendarByCity/' . date('Y/m');
        $response = Http::get($url, [
            'city' => 'Kishoreganj',
            'country' => 'Bangladesh',
            'method' => 4,
            'school' => 1,
        ]);
        $times = $response->object()->data;
        // Time::create([
        //     'city' => 'Kishoreganj',
        //     'month' => date('m'),
        //     'data' => $times,
        // ]);
    }
    // dd($times);
    return view('home', [
        'times' => $times,
    ]);
});
Route::get('settings', function () {
    return view('settings');
});
