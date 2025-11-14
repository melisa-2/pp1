console.log("Essence main.js loaded!");

document.addEventListener("DOMContentLoaded", function () {

    const container = document.getElementById("container");
    const imgsContainers = document.getElementsByClassName("img_container");
    const imgsCount = imgsContainers.length;

    let currentImgIndex = 0;
    let autoScrollInterval = 4000;
    let autoScrollDir = 1;

    function setupSlider() {
        const width = container.clientWidth;
        for (let i = 0; i < imgsCount; i++) {
            imgsContainers[i].style.left = (i * width) + "px";
        }
    }

    function goToSlide(index) {
        const width = container.clientWidth;

        for (let i = 0; i < imgsCount; i++) {
            imgsContainers[i].style.left = width * (i - index) + "px";
        }

        currentImgIndex = index;
    }

    window.onLeftButton = function () {
        if (currentImgIndex > 0) goToSlide(currentImgIndex - 1);
    };

    window.onRightButton = function () {
        if (currentImgIndex < imgsCount - 1) goToSlide(currentImgIndex + 1);
    };

    window.currentSlide = function (n) {
        goToSlide(n - 1);
    };

    function autoScroll() {
        if (currentImgIndex === 0) autoScrollDir = 1;
        else if (currentImgIndex === imgsCount - 1) autoScrollDir = -1;

        goToSlide(currentImgIndex + autoScrollDir);
    }

    setupSlider();
    window.addEventListener("resize", setupSlider);
    setInterval(autoScroll, autoScrollInterval);
});
console.log("Dark mode script loaded!");

// ---- DARK MODE ----

document.addEventListener("DOMContentLoaded", function () {

    const toggleBtn = document.getElementById("darkModeToggle");

    // Load saved mode
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("dark-mode");
        toggleBtn.textContent = "☀️ Light Mode";
    }

    toggleBtn.addEventListener("click", function () {
        document.body.classList.toggle("dark-mode");

        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("darkMode", "enabled");
            toggleBtn.textContent = "☀️ Light Mode";
        } else {
            localStorage.setItem("darkMode", "disabled");
            toggleBtn.textContent = "🌙 Dark Mode";
        }
    });

});
