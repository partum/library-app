// let overlay = document.getElementById("overlay");
// let menu = document.getElementById("login-menu");
// function loginMenu() {
//   overlay.style.display = "block";
//   menu.style.display = "block";
// }

//window.addEventListener("load", setup);

const get = document.getElementById.bind(document);
const query = document.querySelector.bind(document);

function loginMenu() {
  let modalRoot = document.getElementById("login-menu");
  let button = document.getElementById("login-button");
  let modal = document.querySelector(".modal");

  modalRoot.addEventListener("click", rootClick);
  button.addEventListener("click", openModal);
  modal.addEventListener("click", modalClick);

  function rootClick() {
    modalRoot.classList.remove("visible");
  }

  function openModal() {
    modalRoot.classList.add("visible");
  }

  function modalClick(e) {
    e.preventDefault();
    e.stopPropagation();
    e.stopImmediatePropagation();
    return false;
  }
}

loginMenu();
