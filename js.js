let validar = document.getElementById("validar");
// var pesquisar = document.getElementById("pesquisar");

// function buscarDados() {
//   window.location = "inicio.php?search=" + pesquisar.value;
// }
function validarDados() {
  window.location = "iniciocopy.php?search=" + validar.value;
}

// pesquisar.addEventListener("keydown", function (event) {
//   if (event.key == "Enter") {
//     buscarDados();
//   }
// });

validar.addEventListener("keydown", function (event) {
  if (event.key == "Enter") {
    validarDados();
  }
});

// let range = document.querySelector("#html");
// console.log(range.value);
