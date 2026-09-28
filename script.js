const menuButton = document.getElementById("menuButton");
const navMenu = document.getElementById("navMenu");

if (menuButton && navMenu) {
    menuButton.addEventListener("click", function () {
        navMenu.classList.toggle("active");

        if (navMenu.classList.contains("active")) {
            menuButton.textContent = "Close";
        } else {
            menuButton.textContent = "Menu";
        }
    });

    document.querySelectorAll(".nav-menu a").forEach(function (link) {
        link.addEventListener("click", function () {
            navMenu.classList.remove("active");
            menuButton.textContent = "Menu";
        });
    });
}

const themeToggle = document.getElementById("themeToggle");

if (themeToggle) {
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        themeToggle.textContent = "Light";
    }

    themeToggle.addEventListener("click", function () {
        document.body.classList.toggle("dark");

        const isDark = document.body.classList.contains("dark");

        if (isDark) {
            themeToggle.textContent = "Light";
            localStorage.setItem("theme", "dark");
        } else {
            themeToggle.textContent = "Dark";
            localStorage.setItem("theme", "light");
        }
    });
}

const skillBars = document.querySelectorAll(".skill-progress");

if (skillBars.length > 0) {
    const skillObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const progress = entry.target.dataset.progress;
                entry.target.style.width = progress + "%";

                skillObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    skillBars.forEach(function (bar) {
        skillObserver.observe(bar);
    });
}

const revealElements = document.querySelectorAll(
    ".section-header, " +
    ".about-grid, " +
    ".skill-card, " +
    ".timeline-item, " +
    ".experience-item, " +
    ".creation-item, " +
    ".learning-box"
);

revealElements.forEach(function (element) {
    element.classList.add("reveal");
});

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    revealElements.forEach(function (element) {
        revealObserver.observe(element);
    });
}

const year = document.getElementById("year");

if (year) {
    year.textContent = new Date().getFullYear();
}