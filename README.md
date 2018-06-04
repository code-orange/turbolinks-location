# Turbolinks Location middleware for Laravel

This package contains a Laravel middleware for working with Turbolinks.
It sets the Turbolinks-Location header on every response served, so that Turbolinks always shows the correct URL after redirects.

## Installation

```
composer require code-orange/turbolinks-location
```

## Usage

In your `App\Http\Kernel`, add the middleware to your `web` group:

```php
use CodeOrange\TurbolinksLocation\TurbolinksLocation;

class Kernel extends HttpKernel {
    protected $middlewareGroups = [
        'web' => [
            ...,
            TurbolinksLocation::class
        ],
    ];
}
```

That's it!
All requests to routes in your `web.php` route file will now be served with a correct `Turbolinks-Location` header. 
