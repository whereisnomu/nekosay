import Parallax from "./parallax/src/parallax.js";

document.addEventListener("DOMContentLoaded", function () {
  const scene = document.querySelector(".main__image");
  if (scene) {
    new Parallax(scene, {
      relativeInput: true,
    });
  }
});
