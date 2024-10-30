import firebase from "firebase/compat";



importScripts('https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/9.22.2/firebase-messaging.js');

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
firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

// Handle background messages
messaging.onBackgroundMessage((payload) => {
    console.log('Received background message: ', payload);
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
        body: payload.notification.body,
        icon: '/path/to/icon.png' // Make sure this path is correct
    };

    return self.registration.showNotification(notificationTitle, notificationOptions);
});
