/*Este es el documento javascript que sirve para la interacción con la página*/

/*Sirve para que cuando pases el raton por la opcion "compra"
	se despliegue un submenú*/

function comprar() {
  document.getElementById("menuDesplegable").classList.toggle("show");
}

/*Para poner la fecha y hora actuales*/

var f = new Date();
var meses = new Array(
  "Enero",
  "Febrero",
  "Marzo",
  "Abril",
  "Mayo",
  "Junio",
  "Julio",
  "Agosto",
  "Septiembre",
  "Octubre",
  "Noviembre",
  "Diciembre"
);
document.write('<div class="mifecha">');

document.write('<div class="dia">' + f.getDate() + "</div>");
document.write('<div class="mes">' + meses[f.getMonth()] + "</div>");
document.write('<div class="ano">' + f.getFullYear() + "</div>");
document.write("</div>");

/* Botón de contacto: información sobre nosotros */

var botonContacto = document.getElementById("contacto");
var texto_contacto =
  "Somos Paula e Íñigo, estudiantes de Teleco en la UVa.<br/>" +
  "Hemos creado esta página porque somos grandes amantes de la música.<br/>" +
  "Paula Hernández: paula.hernandez.benito@alumnos.uva.es<br/>" +
  "Íñigo Nieto: inigo.nieto@alumnos.uva.es";

var texto_en_pantalla = false; //variable que controla si el texto está en pantalla

botonContacto.addEventListener("click", () => {

  if (!texto_en_pantalla) {

    document.getElementById("infoContacto").innerHTML = texto_contacto;
    texto_en_pantalla = true;
  } 
  else {

    document.getElementById("infoContacto").innerHTML = ""; //borramos el texto
    texto_en_pantalla = false;
  }

  
});

/*Alerta que salta para decir que la opción aún no está disponible*/

var reserva = document.getElementById("reserva_lanzamiento");

var msg = "Esta acción no está disponible por ahora";

reserva.addEventListener("click", () => {

  alert(msg);
});



var 
