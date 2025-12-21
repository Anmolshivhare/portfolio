/**
 * Portfolio JavaScript
 * ====================
 * Includes: AOS, GSAP, jQuery functionality
 */

// Import dependencies
import "bootstrap";
import AOS from "aos";
import { gsap } from "gsap";
import $ from "jquery";

// Make jQuery available globally
window.$ = window.jQuery = $;

// DOM Ready
$(document).ready(function () {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: "ease-out-cubic",
        once: true,
        offset: 100,
        delay: 100,
    });

    // Preloader
    setTimeout(function () {
        $("#preloader").addClass("loaded");
    }, 1500);

    // GSAP Hero Animations
    initHeroAnimations();

    // Typing Effect
    initTypingEffect();

    // Navigation
    initNavigation();

    // Skills Progress Bars
    initSkillBars();

    // Project Filter
    initProjectFilter();

    // Contact Form
    initContactForm();

    // Theme Toggle
    initThemeToggle();

    // Back to Top
    initBackToTop();

    // Set current year
    $("#currentYear").text(new Date().getFullYear());
});

/**
 * Hero GSAP Animations
 */
function initHeroAnimations() {
    // Name letters animation
    const nameLetters = document.querySelectorAll(".name-letter");

    if (nameLetters.length > 0) {
        gsap.to(nameLetters, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.05,
            ease: "power3.out",
            delay: 0.5,
        });
    }

    // Floating cards animation
    gsap.to(".float-card", {
        y: -10,
        duration: 2,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut",
        stagger: 0.5,
    });

    // Gradient blobs animation enhancement
    gsap.to(".blob-1", {
        x: 50,
        y: -30,
        duration: 8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
    });

    gsap.to(".blob-2", {
        x: -30,
        y: 40,
        duration: 10,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut",
    });
}

/**
 * Typing Effect for Role
 */
function initTypingEffect() {
    const roles = [
        "Laravel Developer",
        "Full Stack Developer",
        "PHP Developer",
        "Web Developer",
        "Backend Developer",
    ];

    let roleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const $roleText = $("#roleText");

    function typeRole() {
        const currentRole = roles[roleIndex];

        if (isDeleting) {
            $roleText.text(currentRole.substring(0, charIndex - 1));
            charIndex--;
        } else {
            $roleText.text(currentRole.substring(0, charIndex + 1));
            charIndex++;
        }

        let typeSpeed = isDeleting ? 50 : 100;

        if (!isDeleting && charIndex === currentRole.length) {
            typeSpeed = 2000; // Pause at end
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            roleIndex = (roleIndex + 1) % roles.length;
            typeSpeed = 500; // Pause before next word
        }

        setTimeout(typeRole, typeSpeed);
    }

    // Start typing after preloader
    setTimeout(typeRole, 2000);
}

/**
 * Navigation
 */
function initNavigation() {
    const $header = $("#header");
    const $navMenu = $("#navMenu");
    const $navToggle = $("#navToggle");
    const $navClose = $("#navClose");
    const $navLinks = $(".nav-link");

    // Scroll header effect
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 100) {
            $header.addClass("scrolled");
        } else {
            $header.removeClass("scrolled");
        }

        // Update active nav link
        updateActiveNavLink();
    });

    // Mobile menu toggle
    $navToggle.on("click", function () {
        $navMenu.addClass("show");
        $("body").css("overflow", "hidden");
    });

    $navClose.on("click", function () {
        $navMenu.removeClass("show");
        $("body").css("overflow", "");
    });

    // Close menu on link click
    $navLinks.on("click", function (e) {
        const href = $(this).attr("href");

        if (href.startsWith("#")) {
            e.preventDefault();
            $navMenu.removeClass("show");
            $("body").css("overflow", "");

            // Smooth scroll
            const target = $(href);
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 80,
                    },
                    800,
                    "swing"
                );
            }
        }
    });

    // Close menu on outside click
    $(document).on("click", function (e) {
        if (!$(e.target).closest(".nav-menu, .nav-toggle").length) {
            $navMenu.removeClass("show");
            $("body").css("overflow", "");
        }
    });
}

/**
 * Update active navigation link based on scroll position
 */
function updateActiveNavLink() {
    const sections = $("section[id]");
    const scrollPos = $(window).scrollTop() + 150;

    sections.each(function () {
        const $section = $(this);
        const sectionTop = $section.offset().top;
        const sectionHeight = $section.outerHeight();
        const sectionId = $section.attr("id");

        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
            $(".nav-link").removeClass("active");
            $(`.nav-link[href="#${sectionId}"]`).addClass("active");
        }
    });
}

/**
 * Skills Progress Bars Animation
 */
function initSkillBars() {
    const $skillBars = $(".skill-progress");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const $bar = $(entry.target);
                    const progress = $bar.data("progress");

                    gsap.to(entry.target, {
                        width: `${progress}%`,
                        duration: 1.5,
                        ease: "power2.out",
                    });

                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    $skillBars.each(function () {
        observer.observe(this);
    });
}

/**
 * Project Filter
 */
function initProjectFilter() {
    const $filterBtns = $(".filter-btn");
    const $projects = $(".project-card");

    $filterBtns.on("click", function () {
        const filter = $(this).data("filter");

        // Update active button
        $filterBtns.removeClass("active");
        $(this).addClass("active");

        // Filter projects
        $projects.each(function () {
            const $project = $(this);
            const category = $project.data("category");

            if (filter === "all" || category === filter) {
                gsap.to($project, {
                    opacity: 1,
                    scale: 1,
                    duration: 0.4,
                    onStart: function () {
                        $project.removeClass("hidden").css("display", "block");
                    },
                });
            } else {
                gsap.to($project, {
                    opacity: 0,
                    scale: 0.8,
                    duration: 0.4,
                    onComplete: function () {
                        $project.addClass("hidden").css("display", "none");
                    },
                });
            }
        });
    });
}

/**
 * Contact Form
 */
function initContactForm() {
    const $form = $("#contactForm");
    const $submitBtn = $form.find(".btn-submit");
    const $successMsg = $("#formSuccess");
    const $errorMsg = $("#formError");

    $form.on("submit", function (e) {
        e.preventDefault();

        // Clear previous errors
        $(".error-message").text("");
        $(".form-control").removeClass("error");

        // Validate
        let isValid = true;
        const name = $("#name").val().trim();
        const email = $("#email").val().trim();
        const subject = $("#subject").val().trim();
        const message = $("#message").val().trim();

        if (!name) {
            $("#nameError").text("Please enter your name");
            $("#name").addClass("error");
            isValid = false;
        }

        if (!email) {
            $("#emailError").text("Please enter your email");
            $("#email").addClass("error");
            isValid = false;
        } else if (!isValidEmail(email)) {
            $("#emailError").text("Please enter a valid email");
            $("#email").addClass("error");
            isValid = false;
        }

        if (!subject) {
            $("#subjectError").text("Please enter a subject");
            $("#subject").addClass("error");
            isValid = false;
        }

        if (!message) {
            $("#messageError").text("Please enter your message");
            $("#message").addClass("error");
            isValid = false;
        }

        if (!isValid) return;

        // Show loading state
        $submitBtn.addClass("loading");

        // Submit via AJAX
        $.ajax({
            url: "/contact",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: {
                name: name,
                email: email,
                subject: subject,
                message: message,
            },
            success: function (response) {
                $submitBtn.removeClass("loading");

                if (response.success) {
                    $form.hide();
                    $successMsg.fadeIn();

                    // Reset after delay
                    setTimeout(function () {
                        $form[0].reset();
                        $successMsg.fadeOut(function () {
                            $form.fadeIn();
                        });
                    }, 5000);
                }
            },
            error: function (xhr) {
                $submitBtn.removeClass("loading");
                $form.hide();
                $errorMsg.fadeIn();

                setTimeout(function () {
                    $errorMsg.fadeOut(function () {
                        $form.fadeIn();
                    });
                }, 3000);
            },
        });
    });
}

/**
 * Email validation helper
 */
function isValidEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

/**
 * Theme Toggle
 */
function initThemeToggle() {
    const $toggle = $("#themeToggle");
    const $icon = $("#themeIcon");
    const $html = $("html");

    // Load saved theme
    const savedTheme = localStorage.getItem("portfolio-theme") || "dark";
    $html.attr("data-theme", savedTheme);
    updateThemeIcon(savedTheme);

    $toggle.on("click", function () {
        const currentTheme = $html.attr("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";

        $html.attr("data-theme", newTheme);
        localStorage.setItem("portfolio-theme", newTheme);
        updateThemeIcon(newTheme);

        // Refresh AOS to recalculate positions
        AOS.refresh();
    });

    function updateThemeIcon(theme) {
        if (theme === "dark") {
            $icon.removeClass("bi-sun-fill").addClass("bi-moon-fill");
        } else {
            $icon.removeClass("bi-moon-fill").addClass("bi-sun-fill");
        }
    }
}

/**
 * Back to Top Button
 */
function initBackToTop() {
    const $backToTop = $("#backToTop");

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 500) {
            $backToTop.addClass("visible");
        } else {
            $backToTop.removeClass("visible");
        }
    });

    $backToTop.on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, 800, "swing");
    });
}
