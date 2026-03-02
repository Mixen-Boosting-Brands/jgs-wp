document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const animateCounter = (counter) => {
        const target = +counter.dataset.target;
        const duration = 2000; // ms
        const startTime = performance.now();

        const originalText = counter.textContent.trim();

        // Detectar prefijo / sufijo
        const prefix = originalText.startsWith("+") ? "+" : "";
        const suffix = originalText.endsWith("+")
            ? "+"
            : originalText.endsWith("%")
              ? "%"
              : "";

        const step = (currentTime) => {
            const progress = Math.min((currentTime - startTime) / duration, 1);

            const value = Math.floor(progress * target);

            counter.textContent = `${prefix}${value}${suffix}`;

            if (progress < 1) {
                requestAnimationFrame(step);
            } else {
                counter.textContent = `${prefix}${target}${suffix}`;
            }
        };

        requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver(
        (entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    obs.unobserve(entry.target); // solo una vez
                }
            });
        },
        {
            threshold: 0.6, // % visible antes de animar
        }
    );

    counters.forEach((counter) => {
        observer.observe(counter);
    });
});
