// // Navigation toggle
// window.addEventListener('load', function () {
//       let main_navigation = document.querySelector('#primary-menu');
//       document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
//             e.preventDefault();
//             main_navigation.classList.toggle('hidden');
//       });
// });

import Flickity from "flickity";
// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu");
  document
    .querySelector("#primary-menu-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
});

function load_corouser() {
  let carusel = document.getElementsByClassName("carousel");
  if (carusel.length > 0) {
    let flkty = new Flickity(".carousel", {
      autoPlay: false,
      imagesLoaded: true,
      percentPosition: false,
      pageDots: false,
      groupCells: "100%",
      // adaptiveHeight: true,
    });
  }
}
window.addEventListener("load", load_corouser);
