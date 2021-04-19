// let overlay = document.getElementById("overlay");
// let menu = document.getElementById("login-menu");
// function loginMenu() {
//   overlay.style.display = "block";
//   menu.style.display = "block";
// }

let modalRoot = document.getElementById("login-menu");
function loginMenu() {
  let button = document.getElementById("login-button");
  button.addEventListener("click", openModal);

  function openModal() {
    modalRoot.classList.add("visible");
  }
}

loginMenu();

window.addEventListener("click", function(e) {
  if (
    !document.getElementById("login-button").contains(e.target) &&
    !document.getElementsByClassName("modal")[0].contains(e.target)
  ) {
    modalRoot.classList.remove("visible");
  }
});
