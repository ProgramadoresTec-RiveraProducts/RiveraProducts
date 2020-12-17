
function registrar(){
	var emailR=document.getElementById("emailR").value;
	var contrasenaR=document.getElementById("contraseñaR").value;

firebase.auth().createUserWithEmailAndPassword(emailR, contrasenaR)
  .then((user) => {
  	verificar();
    // Signed in
    // ...

  })
  .catch((error) => {
    
    console.log(error.code);
    console.log(error.message);
    // ..
  });
}

function iniciarSesion(){
	var emailIS=document.getElementById("emailIS").value;
	var contrasenaIS=document.getElementById("contraseñaIS").value;

    firebase.auth().signInWithEmailAndPassword(emailIS,contrasenaIS )
  .then((user) => {
    // Signed in
    // ...
    console.log("sesion iniciada");
  })
  .catch((error) => {
    var errorCode = error.code;
    var errorMessage = error.message;
    console.log(errorCode);
    console.log(errorMessage);
  });
}

function observador(){
	firebase.auth().onAuthStateChanged((user) => {
  if (user) {
  	console.log("existe usuario activo");
  	aparece(user);
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    console.log(".........")
    console.log(user.emailVerified)
    var uid = user.uid;
    // ...
  } else {
    // User is signed out
    // ...
    console.log("no existe usuario activo");
  }
});


}
function aparece(){
	if (user.emailVerified) {
			var contenido=document.getElementById("contenido")
	         contenido.innerHTML=`
     
	          <button id="btncerrarS" onclick="cerrarsesion()">cerrar sesion</button> `;

	}
	
}
function cerrarsesion(){
    firebase.auth().signOut()
    .then(function(){

     	console.log("saliendo....");
    })
    .catch(function(error){
     	console.log(error);

    })
}
function verificar(){
	var user = firebase.auth().currentUser;

user.sendEmailVerification().then(function() {
  // Email sent.
  console.log("Enviando corre.....")
}).catch(function(error) {
  // An error happened.
});
}
observador();