window.addEventListener("load", () => {
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("/service-worker.js");
    }
});

// Detects if device is on iOS
const isIos = () => /iphone|ipad|ipod/.test(window.navigator.userAgent.toLowerCase())

// Detects if device is in standalone mode
const isInStandaloneMode = () => ('standalone' in window.navigator) && (window.navigator.standalone);

const bannerWasHidden = () => getCookie('pwa_banner_hidden') === 'true';

// Checks if should display install popup notification:
if (isIos() && !isInStandaloneMode() && !bannerWasHidden()) {
    document.getElementById('pwa-ios-banner').style.display = 'block';
}

const hidePwaIosBanner = () => {
    document.getElementById('pwa-ios-banner').style.display = 'none';
    setCookie('pwa_banner_hidden', 'true', 30);
}

//  next 2 functions was taken from https://stackoverflow.com/a/24103596

function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }
    return null;
}
