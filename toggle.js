document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".main-nav");
    const backdrop = document.querySelector(".menu-backdrop");

    if (!toggle || !nav || !backdrop) return;

    function openMenu() {
        nav.classList.add("open");
        backdrop.classList.add("open");
        document.body.classList.add("menu-open");
        toggle.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
        nav.classList.remove("open");
        backdrop.classList.remove("open");
        document.body.classList.remove("menu-open");
        toggle.setAttribute("aria-expanded", "false");
    }

    toggle.addEventListener("click", () => {
        nav.classList.contains("open") ? closeMenu() : openMenu();
    });

    backdrop.addEventListener("click", closeMenu);

    // stäng med ESC
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") closeMenu();
    });
});
