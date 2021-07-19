# Laravel PWA

[![Latest Version](http://img.shields.io/packagist/v/soluzione-software/laravel-pwa.svg?label=Release&style=for-the-badge)](https://packagist.org/packages/soluzione-software/laravel-pwa)
[![MIT License](https://img.shields.io/github/license/soluzione-software/laravel-pwa.svg?label=License&color=blue&style=for-the-badge)](https://github.com/soluzione-software/laravel-pwa/blob/master/LICENSE.md)

> Note the package is currently in beta. During the beta period things can and probably will change. Don't use it in production until a stable version has been released. We appreciate you helping out with testing and reporting any bugs.

[PWA](https://web.dev/progressive-web-apps/) for Laravel App.

## Installation & Configuration

1. Install via composer:

```bash
composer require soluzione-software/laravel-pwa
```

2. Edit `resources/views/layouts/app.blade.php` view:

```html
<!doctype html>
<html lang="en">
<head>
  @include('pwa::head')

  <!-- other tags -->
</head>
<body>
@yield('content')

<!-- Scripts -->
@include('pwa::scripts')

<!-- other scripts -->
</body>
</html>
```

3. Publish `public` files:

```bash
php artisan vendor:publish --tag=pwa-public
```

4. Edit `public/app.webmanifest`.

## Disabling locally

Add the following line to `.env` in order to disable the package:

```dotenv
PWA_ENABLED=false
```
