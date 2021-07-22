@if (\Illuminate\Support\Facades\Config::get('pwa.enabled'))
    @include('pwa::ios-banner')
    <script src="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/js/index.js') }}"></script>
@endif
