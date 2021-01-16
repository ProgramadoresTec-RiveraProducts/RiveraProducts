


function registrar(){
  var nombre1=document.getElementById("nombre").value;
  var apaterno1=document.getElementById("apaterno").value;
  var amaterno1=document.getElementById("amaterno").value;
	var email1=document.getElementById("email").value;
	var contraseña1=document.getElementById("contraseña").value;
  var direccion1=document.getElementById("direccion").value;
  var telefono1=document.getElementById("telefono").value;
  var cargo1=document.getElementById("cargo");
  var selected = cargo1.options[cargo1.selectedIndex].text;



firebase.auth().createUserWithEmailAndPassword(email1, contraseña1)
  .then(() => {

    var user=firebase.auth().currentUser
   // verificar();
    var info = {};
    info = {nombre: ''+nombre1, apaterno: ''+apaterno1, amaterno: ''+amaterno1, email: ''+email1,
  contraseña: ''+contraseña1, direccion: ''+direccion1, telefono: ''+telefono1,cargo: ''+selected};
           firebase.database().ref('Usuarios').child(user.uid).set(info)
          

            console.log("se registro..")
  	
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
    location.href ="http://localhost/riveraproducts/sistema/index.php";
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
	       

			//var contenido=document.getElementById("contenido")
	         //contenido.innerHTML=`
     
	        // <button id="btncerrarS" onclick="cerrarsesion()">cerrar sesion</button> `;

	
	
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
  console.log(error);
});
}


observador();