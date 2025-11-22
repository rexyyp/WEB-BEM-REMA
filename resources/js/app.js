import "./bootstrap";

// Smooth Scroll Reveal Animation
document.addEventListener("DOMContentLoaded", function () {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0) scale(1)";
            }
        });
    }, observerOptions);

    document.querySelectorAll(".animate-on-scroll").forEach((el) => {
        observer.observe(el);
    });
});

// Magnetic Button Effect
document.addEventListener("DOMContentLoaded", function () {
    const magneticElements = document.querySelectorAll(".magnetic-effect");

    magneticElements.forEach((element) => {
        element.addEventListener("mousemove", function (e) {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            element.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
        });

        element.addEventListener("mouseleave", function () {
            element.style.transform = "translate(0, 0)";
        });
    });
});

// Parallax Effect for Hero Section
window.addEventListener("scroll", function () {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll("[data-parallax]");

    parallaxElements.forEach((element) => {
        const speed = element.dataset.parallax || 0.5;
        element.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Counter Animation
function animateCounter(element) {
    const target = parseInt(element.textContent.replace(/\D/g, ""));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = element.textContent.replace(/\d+/, target);
            clearInterval(timer);
        } else {
            element.textContent = element.textContent.replace(
                /\d+/,
                Math.floor(current)
            );
        }
    }, 16);
}

// Trigger counter animation when stats are visible
const statsObserver = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                entry.target.dataset.animated = "true";
                const numberElement = entry.target.querySelector(
                    ".text-3xl, .text-2xl"
                );
                if (numberElement) {
                    animateCounter(numberElement);
                }
            }
        });
    },
    { threshold: 0.5 }
);

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".bounce-on-hover").forEach((stat) => {
        statsObserver.observe(stat);
    });
});

// Tilt Effect for Cards
document.addEventListener("DOMContentLoaded", function () {
    const tiltElements = document.querySelectorAll(".tilt-on-hover");

    tiltElements.forEach((element) => {
        element.addEventListener("mousemove", function (e) {
            const rect = element.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            element.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
        });

        element.addEventListener("mouseleave", function () {
            element.style.transform =
                "perspective(1000px) rotateX(0) rotateY(0) scale(1)";
        });
    });
});

// Image Glow Effect on Mouse Move
document.addEventListener("DOMContentLoaded", function () {
    const glowImages = document.querySelectorAll(".image-glow-overlay");

    glowImages.forEach((image) => {
        image.addEventListener("mousemove", function (e) {
            const rect = image.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;

            const glow = image.querySelector("::before") || image;
            if (glow) {
                image.style.setProperty("--mouse-x", `${x}%`);
                image.style.setProperty("--mouse-y", `${y}%`);
            }
        });
    });
});

// Enhanced Card Hover with 3D Follow Effect
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card-3d, .card-glow-hover");

    cards.forEach((card) => {
        card.addEventListener("mouseenter", function () {
            this.style.transition = "transform 0.1s ease";
        });

        card.addEventListener("mousemove", function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;

            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
        });

        card.addEventListener("mouseleave", function () {
            this.style.transition = "transform 0.5s ease";
            this.style.transform =
                "perspective(1000px) rotateX(0) rotateY(0) scale(1)";
        });
    });
});

// Ripple Effect on Click
document.addEventListener("DOMContentLoaded", function () {
    const rippleElements = document.querySelectorAll(
        ".ripple-effect, button, .cta-btn"
    );

    rippleElements.forEach((element) => {
        element.addEventListener("click", function (e) {
            const ripple = document.createElement("span");
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                background: rgba(250, 204, 21, 0.5);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple-animation 0.6s ease-out;
                pointer-events: none;
            `;

            this.style.position = "relative";
            this.style.overflow = "hidden";
            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });
    });
});

// Add ripple animation
const style = document.createElement("style");
style.textContent = `
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Smooth Glow Pulse for Important Elements
document.addEventListener("DOMContentLoaded", function () {
    const glowElements = document.querySelectorAll(".intense-glow");

    glowElements.forEach((el, index) => {
        el.style.animationDelay = `${index * 0.2}s`;
    });
});

// ============================================================
// ULTRA RESPONSIVE 3D TILT EFFECT FOR LEADERSHIP CARDS
// ============================================================
// Configurable parameters - EASY TO ADJUST
const TILT_CONFIG = {
    maxTilt: 30, // Maximum tilt angle in degrees (adjust: 10-40)
    scaleOnHover: 1.08, // Scale factor on hover (adjust: 1.0-1.2)
    transitionSpeed: 0.6, // Transition duration in seconds (adjust: 0.3-1.0)
    perspective: 1500, // 3D perspective depth (adjust: 1000-2000)
    shadowDepth: 50, // Shadow depth multiplier (adjust: 20-80)
    glareOpacity: 0.15, // Glare overlay opacity (adjust: 0-0.3)
    smoothing: 0.1, // Mouse tracking smoothing (adjust: 0.05-0.3)
};

document.addEventListener("DOMContentLoaded", function () {
    const tiltCards = document.querySelectorAll(".card-3d-tilt-leadership");

    // Check if mobile device
    const isMobile =
        /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator.userAgent
        );

    tiltCards.forEach((card) => {
        if (isMobile) {
            // Mobile: Simple scale on touch, no tilt
            card.addEventListener("touchstart", function () {
                this.style.transform = `scale(${TILT_CONFIG.scaleOnHover})`;
            });
            card.addEventListener("touchend", function () {
                this.style.transform = "scale(1)";
            });
            return;
        }

        // Desktop: Full 3D tilt with mouse tracking
        let currentX = 0,
            currentY = 0;
        let targetX = 0,
            targetY = 0;
        let rafId = null;

        // Smooth animation loop using requestAnimationFrame
        function animate() {
            // Smooth lerp (linear interpolation) for inertia effect
            currentX += (targetX - currentX) * TILT_CONFIG.smoothing;
            currentY += (targetY - currentY) * TILT_CONFIG.smoothing;

            const rotateX = currentY * TILT_CONFIG.maxTilt;
            const rotateY = -currentX * TILT_CONFIG.maxTilt;

            // Dynamic shadow based on tilt direction
            const shadowX = currentX * TILT_CONFIG.shadowDepth;
            const shadowY = currentY * TILT_CONFIG.shadowDepth;
            const shadowBlur = 40 + Math.abs(currentX + currentY) * 30;

            // Apply 3D transform
            card.style.transform = `
                rotateX(${rotateX}deg) 
                rotateY(${rotateY}deg) 
                scale3d(${TILT_CONFIG.scaleOnHover}, ${TILT_CONFIG.scaleOnHover}, ${TILT_CONFIG.scaleOnHover})
                translateZ(30px)
            `;

            // Apply dynamic shadow
            card.style.boxShadow = `
                ${shadowX}px ${shadowY}px ${shadowBlur}px rgba(0, 0, 0, 0.3),
                0 20px 40px rgba(0, 0, 0, 0.2)
            `;

            // Continue animation if still tracking
            if (
                Math.abs(targetX - currentX) > 0.01 ||
                Math.abs(targetY - currentY) > 0.01
            ) {
                rafId = requestAnimationFrame(animate);
            }
        }

        card.addEventListener("mouseenter", function () {
            this.style.transition = "none";
            rafId = requestAnimationFrame(animate);
        });

        card.addEventListener("mousemove", function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            // Normalize to -1 to 1 range
            targetX = (x / rect.width) * 2 - 1;
            targetY = (y / rect.height) * 2 - 1;

            // Start animation if not running
            if (!rafId) {
                rafId = requestAnimationFrame(animate);
            }
        });

        card.addEventListener("mouseleave", function () {
            // Cancel animation frame
            if (rafId) {
                cancelAnimationFrame(rafId);
                rafId = null;
            }

            // Reset to center with smooth transition
            targetX = 0;
            targetY = 0;

            this.style.transition = `transform ${TILT_CONFIG.transitionSpeed}s cubic-bezier(0.23, 1, 0.32, 1), box-shadow ${TILT_CONFIG.transitionSpeed}s ease`;
            this.style.transform =
                "rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1) translateZ(0)";
            this.style.boxShadow = "0 10px 30px rgba(0, 0, 0, 0.15)";
        });
    });
});

// Dramatic 3D Tilt Effect for About Image Card
document.addEventListener("DOMContentLoaded", function () {
    const aboutCards = document.querySelectorAll(".card-3d-tilt-about");

    aboutCards.forEach((card) => {
        const img = card.querySelector("img");

        card.addEventListener("mouseenter", function () {
            this.style.transition =
                "transform 0.05s ease-out, box-shadow 0.3s ease";
            this.style.boxShadow = "0 40px 80px -20px rgba(0, 0, 0, 0.5)";
        });

        card.addEventListener("mousemove", function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            // VERY DRAMATIC rotation (max ±30 degrees)
            const rotateX = ((y - centerY) / centerY) * 30;
            const rotateY = ((centerX - x) / centerX) * 30;

            // Apply STRONG 3D transform with lift effect
            this.style.transform = `
                translateX(40px)
                perspective(1200px) 
                rotateX(${-rotateX}deg) 
                rotateY(${rotateY}deg) 
                scale3d(1.08, 1.08, 1.08)
                translateZ(50px)
            `;

            // Image zoom WITHOUT blur - crisp and clear
            if (img) {
                img.style.transform = "scale(1.15)";
            }
        });

        card.addEventListener("mouseleave", function () {
            this.style.transition =
                "transform 0.7s cubic-bezier(0.23, 1, 0.32, 1), box-shadow 0.5s ease";
            this.style.transform =
                "translateX(40px) perspective(1200px) rotateX(0) rotateY(0) scale3d(1, 1, 1) translateZ(0)";
            this.style.boxShadow = "";

            if (img) {
                img.style.transition =
                    "transform 0.7s cubic-bezier(0.23, 1, 0.32, 1)";
                img.style.transform = "scale(1)";
            }
        });
    });
});
