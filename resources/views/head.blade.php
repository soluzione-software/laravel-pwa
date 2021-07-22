@if (\Illuminate\Support\Facades\Config::get('pwa.enabled'))
    <link rel="manifest" href="{{ \Illuminate\Support\Facades\URL::asset('app.webmanifest') }}">
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link rel="apple-touch-icon"
          href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/icons/120.png') }}">{{-- iphone --}}
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/icons/180.png') }}">{{-- iphone-retina --}}
    <link rel="apple-touch-icon" sizes="152x152"
          href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/icons/152.png') }}">{{-- ipad --}}
    <link rel="apple-touch-icon" sizes="167x167"
          href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/icons/167.png') }}">{{-- ipad-retina --}}

    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/2048x2732.png') }}"
          sizes="2048x2732" rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/1668x2224.png') }}"
          sizes="1668x2224" rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/1536x2048.png') }}"
          sizes="1536x2048" rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/1125x2436.png') }}"
          sizes="1125x2436" rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/1242x2208.png') }}"
          sizes="1242x2208" rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/750x1334.png') }}" sizes="750x1334"
          rel="apple-touch-startup-image"/>
    <link href="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/images/splash/640x1136.png') }}" sizes="640x1136"
          rel="apple-touch-startup-image"/>

    <style>
        .pwa-ios-banner {
            display: none;
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            margin: 1em;
            z-index: 99999;
            text-align: center;
            font-size: .8em;
        }

        .pwa-ios-banner-inner {
            display: inline-flex;
            background-color: #C9CDD5;
            border-radius: .5em;
        }

        .pwa-ios-banner-close-btn {
            background: none;
            border: none;
        }
    </style>
@endif
