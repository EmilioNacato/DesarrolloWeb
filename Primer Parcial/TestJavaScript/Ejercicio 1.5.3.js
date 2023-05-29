let variable;
do {
  variable = prompt("¿Cuánto es 2+2?");
  try {
    if (parseInt(variable) == 4) {
      console.log("Felicitaciones");
      alert("Felicitaciones");
    }
  } catch (error) {
    console.log("Ingresa un valor entero");
  }
} while (parseInt(variable) !== 4);
