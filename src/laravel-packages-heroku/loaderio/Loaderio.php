<?php namespace LaravelPackagesHeroku\Loaderio;

use Config;
use Exception;
use Requests;

class Loaderio {

    const API_ENDPOINT = 'https://api.loader.io/v2/';

    /**
     * Make an API call to loader.io
     * @param  string $path API request path
     * @return mixed Object or false on errors
     */
    public static function api($path)
    {
        $headers = array(
            'Accept' => 'application/json',
            'loaderio-auth' => Loaderio::getApiKey()
        );

        $request = Requests::get(Loaderio::API_ENDPOINT . $path, $headers);

        if($request->status_code == 200){
            return json_decode($request->body);
        }

        return false;
    }

    /**
     * Get the API key from config
     * @return string Loader.io API key
     */
    public static function getApiKey()
    {
        return Config::get('loaderio::key');
    }

    /**
     * Return list of apps registered on this account
     * @return object
     */
	public static function getApps()
    {
        return Loaderio::api('apps');
    }

    /**
     * Check if an APP ID is linked to this account
     * @param  string  $app_id Loader.io app_id
     * @return boolean
     */
    public static function isValidApp($app_id)
    {
        $app = Loaderio::api('apps/' . $app_id);
        return ($app && $app->app_id == $app_id);
    }

}
