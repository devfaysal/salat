<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $city = cache()->get('settings.city');
    $method = cache()->get('settings.method');
    $school = cache()->get('settings.school');
    $timesKey = 'times' . '-' . $city . '-' . $method . '-' . $school;
    if (cache()->has($timesKey)) {
        $times = cache()->get($timesKey);
    } else {
        $url = 'http://api.aladhan.com/v1/calendarByCity/'.date('Y/m');
        $response = Http::get($url, [
            'city' => $city,
            'country' => 'Bangladesh',
            'method' => $method,
            'school' => $school,
        ]);
        $times = $response->object()->data;
        cache()->put($timesKey, $times);
    }

    // dd($times);
    return view('home', [
        'times' => $times,
    ]);
});
Route::get('settings', function () {
    return view('settings');
});
