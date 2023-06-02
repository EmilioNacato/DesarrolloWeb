let respuestaCorrecta = false;

while (!respuestaCorrecta) {
  const respuesta = prompt("¿Cuánto es 2 + 2?");
  
  if (parseInt(respuesta) === 4) {
    console.log("¡Respuesta correcta!");
    respuestaCorrecta = true;
  } else {
    console.log("Respuesta incorrecta. Intenta de nuevo.");
  }
}
