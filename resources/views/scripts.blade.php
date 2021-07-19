@if (\Illuminate\Support\Facades\Config::get('pwa.enabled'))
    <script src="{{ \Illuminate\Support\Facades\URL::asset('vendor/pwa/js/index.js') }}"></script>
@endif
