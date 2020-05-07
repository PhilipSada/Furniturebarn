"use strict";

window.addEventListener('load', function () {
  var preload = document.querySelector('.pre-load-wrapper');
  window.setTimeout(function () {
    preload.classList.add('pre-load-finish');
  }, 1000);
});