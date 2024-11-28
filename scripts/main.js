import { setupMenu } from './menu.js';
import { setupHeroAnimation } from './heroAnimation.js';

document.addEventListener("DOMContentLoaded", () => {
  const burger = document.getElementById("burger");
  const overlay = document.querySelector("section");

  setupMenu(burger, overlay);

  setupHeroAnimation();
});
