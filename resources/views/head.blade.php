@if (\Illuminate\Support\Facades\Config::get('pwa.enabled'))
    <link rel="manifest" href="{{ \Illuminate\Support\Facades\URL::asset('/app.webmanifest') }}">
@endif
