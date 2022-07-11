function validar() {
  let senha1 = document.querySelector("#senha1").value;
  let senha2 = document.querySelector("#senha2").value;

  if (senha1 === senha2) {
    document.getElementById("cadastroadm").submit();
  } else {
    alert("senhas diferentes");
  }
}

let pesquisar = document.querySelector("#pesquisar");

pesquisar.addEventListener("keydown", function (event) {
  if (event.key == "Enter") {
    buscarDados();
  }
});

function buscarDados() {
  window.location = "inicio.php?search=" + pesquisar.value;
}
