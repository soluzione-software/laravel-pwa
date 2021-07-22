<div id="pwa-ios-banner" class="pwa-ios-banner">
    <div class="pwa-ios-banner-inner">
        <div style="padding: .25em .5em">{!! \Illuminate\Support\Facades\Lang::get('pwa::messages.ios_install_banner', ['share_icon' => file_get_contents(public_path('vendor/pwa/images/share.svg'))]) !!}</div>
        <div><button class="pwa-ios-banner-close-btn" onclick="hidePwaIosBanner()">{!! file_get_contents(public_path('vendor/pwa/images/close.svg')) !!}</button></div>
    </div>
</div>
