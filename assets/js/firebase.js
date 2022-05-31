
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js";
  import { getAuth,GoogleAuthProvider,signInWithRedirect,getRedirectResult ,signOut } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-auth.js";
  //  TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCCXMtTmLklMfw_u43fAukzfFj8i9U7yi8",
    authDomain: "auth-208f6.firebaseapp.com",
    projectId: "auth-208f6",
    storageBucket: "auth-208f6.appspot.com",
    messagingSenderId: "1001004565661",
    appId: "1:1001004565661:web:e54d344213301d4526c074",
    measurementId: "G-ZRG75B69WL"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const auth = getAuth(app);
  const analytics = getAnalytics(app);
  const provider = new GoogleAuthProvider(app);

  login.addEventListener('click',(e)=>{
    signInWithRedirect(auth,provider);
  })

  getRedirectResult(auth)
  .then((result) => {
    // This gives you a Google Access Token. You can use it to access Google APIs.
    const credential = GoogleAuthProvider.credentialFromResult(result);
    const token = credential.accessToken;

    // The signed-in user info.
    const user = result.user;
  }).catch((error) => {
    // Handle Errors here.
    const errorCode = error.code;
    const errorMessage = error.message;
    // The email of the user's account used.
    const email = error.email;
    // The AuthCredential type that was used.
    const credential = GoogleAuthProvider.credentialFromError(error);
    // ...

    signOut(auth).then(() => {
        // Sign-out successful.
      }).catch((error) => {
        // An error happened.
      });
  })