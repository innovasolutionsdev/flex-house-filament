import './bootstrap';

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/firebase-messaging-sw.js')
        .then((registration) => {
            console.log('Service Worker registered with scope:', registration.scope);
            return registration;
        })
        .catch((err) => {
            console.error('Service Worker registration failed:', err);
        });
}

const messaging = firebase.messaging();

messaging.requestPermission()
    .then(() => {
        console.log('Notification permission granted.');
        return messaging.getToken();
    })
    .then((token) => {
        console.log('FCM Token:', token);
        // Send the token to your server to save it
    })
    .catch((err) => {
        console.error('Unable to get permission to notify.', err);
    });
