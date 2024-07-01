// document.addEventListener("DOMContentLoaded", function () {
let modal = document.getElementById("modal");
let modalPoll = document.getElementById("modal-poll");

let button = document.querySelectorAll(".open-modal");
let buttonPoll = document.querySelectorAll(".open-modal-poll");

let closeButton = document.querySelectorAll("#closeModalBtn");

button.forEach(function (item) {
  item.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.remove("fadeOut");
    modal.style.display = "block";
  });
});

buttonPoll.forEach(function (item) {
  item.addEventListener("click", function (e) {
    e.preventDefault();

    modalPoll.classList.remove("fadeOut");
    modalPoll.style.display = "block";
  });
});

closeButton.forEach(function (item) {
  item.addEventListener("click", function () {
    modal.classList.add("fadeOut");
    modalPoll.classList.add("fadeOut");

    setTimeout(function () {
      modal.style.display = "none";
      modalPoll.style.display = "none";
    }, 200);
  });
});

window.addEventListener("click", function (event) {
  if (event.target == modal) {
    modal.classList.add("fadeOut");

    setTimeout(function () {
      modal.style.display = "none";
    }, 200);
  }

  if (event.target == modalPoll) {
    modalPoll.classList.add("fadeOut");

    setTimeout(function () {
      modalPoll.style.display = "none";
    }, 200);
  }
});

// });
