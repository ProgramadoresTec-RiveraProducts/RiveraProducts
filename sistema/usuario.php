<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
</head>
<body>
	<div id="contenido"></div>
	 <button id="btncerrarS" onclick="cerrarsesion()">cerrar sesion</button>
	<!-- The core Firebase JS SDK is always required and must be listed first -->


<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyApBD2H3kLnqI9NsiUW_cn60wwzIBwsVSk",
    authDomain: "riveraproductsapp.firebaseapp.com",
    databaseURL: "https://riveraproductsapp.firebaseio.com",
    projectId: "riveraproductsapp",
    storageBucket: "riveraproductsapp.appspot.com",
    messagingSenderId: "946098361984",
    appId: "1:946098361984:web:4f7202bc926da707b2f865",
    measurementId: "G-QHM8J9JVR9"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>