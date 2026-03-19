function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        }
    }
}

window.addEventListener("scroll", reveal);
reveal();



const counters = document.querySelectorAll(".stat-number");

const animateCounter = (el) => {
    const target = +el.getAttribute("data-target");
    if (!target) return;

    let count = 0;
    const speed = target / 50;

    const update = () => {
        count += speed;
        if (count < target) {
            el.innerText = Math.floor(count) + "+";
            requestAnimationFrame(update);
        } else {
            el.innerText = target + "+";
        }
    };

    update();
};

// trigger when visible
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
        }
    });
});

counters.forEach(counter => {
    if (counter.dataset.target) {
        observer.observe(counter);
    }
});

