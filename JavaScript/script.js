$(document).ready(function(){
    $('.contenedor').bxSlider({
        mode:'fade',
        auto:true
    });
    
});

function agregar(){
var nombre = document.getElementById("nombre").value;
var apaterno = document.getElementById("apaterno").value;
var amaterno = document.getElementById("amaterno").value;
var correo = document.getElementById("correo").value;
var comp = "";
if(nombre != comp &&  apaterno != comp &&  amaterno != comp &&  correo != comp){
    alert("Registrado con exito");
    document.getElementById("nombre").value = null;
    document.getElementById("apaterno").value = null;
    document.getElementById("amaterno").value = null;
    document.getElementById("correo").value = null;
    }
else{
    alert("Verifique los datos ingresados");
    
    }
      
}


