const name = "Sebastian David";
const lastname = "Falconi Davalos";
const completeName = name + " " + lastname;
const nickname = "sebastiandavidfalconi";

function saludo(completeName, nickname) {
  console.log(
    "Mi nombre es " +
      completeName +
      ", pero prefiero que me digas " +
      nickname +
      "."
  );
}

saludo(completeName, nickname);
