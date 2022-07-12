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
  // let flkty = new Flickity(".carousel", {
  //   lazyLoad: false,
  //   cellAlign: "right",
  //   contain: true,
  //   autoPlay: true,
  // });
  let flkty = new Flickity(".carousel", {
    autoPlay: false,
    imagesLoaded: true,
    percentPosition: false,
    pageDots: false,
    groupCells: "100%",
    // adaptiveHeight: true,
  });
});
// var elem = document.querySelector(".carousel");
// var flkty = new Flickity(elem, {
//   // options
//   cellAlign: "left",
//   contain: true,
// });
// var flkty = new Flickity(".carousel", {
//   lazyLoad: true,
//   cellAlign: "left",
//   contain: true,
//   autoPlay: true,
// });
