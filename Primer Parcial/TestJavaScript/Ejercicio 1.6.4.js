let objetoAutos = {
  marca: "Volkswagen Polo",
  precio: "20000",
  color: "rojo",
  anio: 2010,
};

function mostrarElementos(objetoAutos) {
  Object.keys(objetoAutos).forEach(function (valor) {
    console.log(valor + ": " + objetoAutos[valor]);
    return valor;
  });
}
mostrarElementos(objetoAutos);
