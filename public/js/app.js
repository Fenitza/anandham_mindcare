document.addEventListener('DOMContentLoaded', function () {

    // =========================
    // PARALLAX
    // =========================
    document.querySelectorAll('.parallax-container').forEach(function(container) {

        var content = container.querySelector('.parallax-content');

        container.addEventListener('mousemove', function(e) {
            var rect = container.getBoundingClientRect();
            var x = (e.clientX - rect.left) / rect.width - 0.5;
            var y = (e.clientY - rect.top) / rect.height - 0.5;

            if (content) {
                content.style.transform =
                    "translate(" + (x * 30) + "px, " + (y * 30) + "px)";
            }
        });

        container.addEventListener('mouseleave', function() {
            if (content) content.style.transform = "translate(0,0)";
        });

    });

    // =========================
    // CURSOR GLOW
    // =========================
    var glow = document.querySelector('.cursor-glow');

    if (glow) {
        document.addEventListener('mousemove', function(e) {
            gsap.to(glow, {
                x: e.clientX,
                y: e.clientY,
                duration: 0.3
            });
        });
    }

    // =========================
    // MAGNETIC BUTTON
    // =========================
    document.querySelectorAll('.magnetic').forEach(function(btn) {
        btn.addEventListener('mousemove', function(e) {
            var rect = btn.getBoundingClientRect();
            var x = e.clientX - rect.left - rect.width / 2;
            var y = e.clientY - rect.top - rect.height / 2;

            gsap.to(btn, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.3
            });
        });

        btn.addEventListener('mouseleave', function() {
            gsap.to(btn, { x: 0, y: 0 });
        });
    });

    // =========================
    // INTRO ANIMATION
    // =========================
    var tl = gsap.timeline();

    tl.to(".intro-logo img", {
        opacity: 1,
        scale: 1,
        duration: 1.2,
        ease: "power3.out"
    })
    .to(".intro-text", {
        opacity: 1,
        y: -10,
        duration: 1,
        ease: "power2.out"
    }, "-=0.6")
    .to("#intro-loader", {
        opacity: 0,
        duration: 1,
        delay: 0.5,
        onComplete: function () {
            var el = document.getElementById("intro-loader");
            if (el) el.style.display = "none";
        }
    });

    // =========================
    // HERO REVEAL
    // =========================
    gsap.from(".hero-panel", {
        scale: 1.1,
        opacity: 0,
        duration: 1.5,
        stagger: 0.2,
        ease: "power3.out"
    });

    gsap.from(".content > *", {
        y: 40,
        opacity: 0,
        duration: 1,
        stagger: 0.15,
        delay: 0.5,
        ease: "power2.out"
    });

});

// =========================
// CINEMATIC INTRO
// =========================
var tl = gsap.timeline();

// LOGO APPEAR
tl.to(".intro-logo img", {
    opacity: 1,
    scale: 1,
    duration: 1.2,
    ease: "power3.out"
})

// GLOW PULSE
.to(".logo-glow", {
    opacity: 1,
    scale: 1.3,
    duration: 1,
    ease: "power2.out"
}, "-=1")

// TEXT LETTER ANIMATION
.to(".intro-text span", {
    opacity: 1,
    y: 0,
    stagger: 0.05,
    duration: 0.6,
    ease: "power2.out"
}, "-=0.8")

// LIGHT SWEEP
.to(".light-sweep", {
    x: "100%",
    duration: 1.5,
    ease: "power2.inOut"
}, "-=1")

// CURTAIN OPEN
.to(".curtain.left", {
    x: "-100%",
    duration: 1.2,
    ease: "power4.inOut"
}, "-=0.5")

.to(".curtain.right", {
    x: "100%",
    duration: 1.2,
    ease: "power4.inOut"
}, "-=1.2")

// REMOVE LOADER
.to("#intro-loader", {
    opacity: 0,
    duration: 0.8,
    onComplete: function () {
        var el = document.getElementById("intro-loader");
        if (el) el.style.display = "none";
    }
});

window.addEventListener("load", () => {
    setTimeout(() => {
        const loader = document.getElementById("intro-loader");
        loader.classList.add("loader-hide");

        setTimeout(() => {
            loader.style.display = "none";
        }, 800);
    }, 2500); // duration of intro
});

