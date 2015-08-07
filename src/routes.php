<?php

use LaravelPackagesHeroku\Loaderio\Loaderio;

$apps = Loaderio::getApps();

Route::get('loaderio-{app_id}', function($app_id){
    // Check is this is a valid app_id
    if(Loaderio::isValidApp($app_id)){
        // Create our own Http Repsonse and exit so that now other
        // packages can add additional data to the response
        // tool like loic-sharma/profiler screw with the response
        $response = new Illuminate\Http\Response(Request::path());
        $response->send();

        exit();
    }
});
