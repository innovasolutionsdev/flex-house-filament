import { initializeApp } from "firebase/app";
import { getMessaging, getToken, onMessage } from "firebase/messaging";

// Firebase configuration from Firebase Console
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

// Request Permission and Get Token
async function requestPermission() {
    console.log("Requesting permission...");
    const permission = await Notification.requestPermission();
    if (permission === 'granted') {
        console.log("Notification permission granted.");
        // Get registration token
        const currentToken = await getToken(messaging, { vapidKey: "BGL2kzbjuM6eemBjoXWvXuiFXGrFwvBh5vbY4ztkb-o4cxs9-u3Lx0BhR4Gt5bNNAwnHtUja5kzeG0lp4Hudlvo" });
        if (currentToken) {
            console.log("FCM Token:", currentToken);
            // Save token to your server/database
            await saveTokenToServer(currentToken);
        } else {
            console.log("No registration token available.");
        }
    } else {
        console.log("Unable to get permission to notify.");
    }
}

// Save the FCM token to your server
async function saveTokenToServer(token) {
    await fetch('/save-fcm-token', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ fcm_token: token })
    });
}

// Handle incoming messages
onMessage(messaging, (payload) => {
    console.log("Message received. ", payload);
    // Display notification or perform an action
});

// Request permission and get token
requestPermission();
