[![Build Status](https://travis-ci.org/laravel-packages/loaderio.png?branch=master)](https://travis-ci.org/laravel-packages/loaderio)
[![Latest Stable Version](https://poser.pugx.org/laravel-packages/loaderio/v/stable.png)](https://packagist.org/packages/laravel-packages/loaderio)
[![Total Downloads](https://poser.pugx.org/laravel-packages/loaderio/downloads.png)](https://packagist.org/packages/laravel-packages/loaderio)
[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/laravel-packages/loaderio/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

# Introduction

Automatically add the required routes to your app to verify your site for use with http://loader.io/
I've used loader.io on a few sites which I've deployed using Heroku, and found it a chore, and a little messy, to add the verification routes for each of my environments manually. So I created this package.

# Installation

Update your `composer.json` file to include this package as a dependency
```json
"laravel-packages/loaderio": "dev-master"
```

Register the Loaderio service provider by adding it to the providers array in the `app/config/app.php` file.
```
LaravelPackages\Loaderio\LoaderioServiceProvider
```

# Configuration

Copy the config file into your project by running
```
php artisan config:publish laravel-packages/loaderio
```

Edit the config file to include your API Key

