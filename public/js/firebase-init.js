import { initializeApp } from "firebase/app";
import { getMessaging, getToken, onMessage } from "firebase/messaging";

// Your Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyD9Zpp-ZYvKR2KAMVUxPnJVEx3kqMv7SSY",
    authDomain: "flexhouse-5cb7a.firebaseapp.com",
    projectId: "flexhouse-5cb7a",
    storageBucket: "flexhouse-5cb7a.appspot.com",
    messagingSenderId: "634407609884",
    appId: "1:634407609884:web:c3615dbb903f4a5b98e1d9",
    measurementId: "G-2V2T3G51NZ"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const messaging = getMessaging(app);

// Register the service worker
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/firebase-messaging-sw.js')
        .then((registration) => {
            console.log('Service Worker registered with scope:', registration.scope);
        })
        .catch((err) => {
            console.error('Service Worker registration failed:', err);
        });
}

// Request permission and get FCM token
async function requestPermission() {
    try {
        const permission = await Notification.requestPermission();
        if (permission === 'granted') {
            console.log('Notification permission granted.');
            const token = await getToken(messaging, { vapidKey: 'YOUR_PUBLIC_VAPID_KEY' });
            // Save the token
        } else {
            console.error('Unable to get permission to notify.');
        }
    } catch (error) {
        console.error('An error occurred while requesting notification permission.', error);
    }
}


// Function to save FCM token to server
async function saveFcmToken(fcmToken) {
    try {
        await fetch('/save-token', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ fcm_token: fcmToken })
        });
        console.log('FCM token saved successfully');
    } catch (error) {
        console.error('Error saving FCM token:', error);
    }
}

// Request permission on load
requestPermission();

// Handle incoming messages
onMessage(messaging, (payload) => {
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: 'YOUR_NOTIFICATION_ICON_URL',
    };

    new Notification(notificationTitle, notificationOptions);
});
