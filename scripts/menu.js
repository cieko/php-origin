export function setupMenu(burger, overlay) {
  let showMenu = false;

  overlay.style.display = "none";

  burger.addEventListener("click", () => {
    showMenu = !showMenu;
    if (showMenu) {
      burger.classList.add("active");
      overlay.style.display = "block";
      gsap.to(overlay, 1, {
        clipPath: "polygon(0% 0%, 100% 0, 100% 100%, 0% 100%)",
        ease: "expo.in"
      });
    } else {
      burger.classList.remove("active");
      gsap.to(overlay, 1, {
        clipPath: "polygon(0% 0%, 100% 0%, 100% 0%, 0% 0%)",
        ease: "expo.out",
        onComplete: () => (overlay.style.display = "none")
      });
    }
  });
}
