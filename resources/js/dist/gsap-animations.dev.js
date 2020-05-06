"use strict";

var tl = gsap.timeline();
tl.fromTo(".homeHamburger", {
  x: -200,
  opacity: 0
}, {
  x: 0,
  opacity: 1,
  delay: 0.5,
  duration: 1.3
}).fromTo(".homeNavContact", {
  x: 200,
  opacity: 0
}, {
  x: 0,
  opacity: 1,
  delay: 0.5,
  duration: 1.3
}, ">-1.8").fromTo(".hero-text", {
  x: 0,
  y: 100,
  opacity: 0
}, {
  x: 0,
  y: 0,
  opacity: 1,
  duration: 1.3
}).fromTo(".social-icons", {
  x: 0,
  y: 100,
  opacity: 0
}, {
  x: 0,
  y: 0,
  opacity: 1,
  duration: 1.3
});