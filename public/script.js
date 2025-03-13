document.addEventListener("DOMContentLoaded", function () {
    // Mobile Menu Toggle
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const closeMenu = document.getElementById("close-menu");

    // Open mobile menu when the menu button is clicked
    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.remove("hidden");
        mobileMenu.classList.remove("-translate-y-full");
        mobileMenu.classList.add("translate-y-0"); // Slide in the menu
    });

    // Close mobile menu when the close button is clicked
    closeMenu.addEventListener("click", () => {
        mobileMenu.classList.add("-translate-y-full"); // Slide out the menu
        mobileMenu.classList.remove("translate-y-0");
        mobileMenu.classList.add("hidden");
    });

    // Mobile Dropdown Toggle
    const mobileDropdownBtn = document.getElementById("mobile-dropdown-btn");
    const mobileDropdownMenu = document.getElementById("mobile-dropdown-menu");

    mobileDropdownBtn.addEventListener("click", () => {
        mobileDropdownMenu.classList.toggle("hidden"); // Toggle the dropdown menu visibility
    });

    // Close dropdown when clicking outside of it
    document.addEventListener("click", (event) => {
        if (!mobileDropdownBtn.contains(event.target) && !mobileDropdownMenu.contains(event.target)) {
            mobileDropdownMenu.classList.add("hidden");
        }
    });
    
    // Optionally, trigger the dropdown menu when tapping outside to close
    document.addEventListener("touchstart", (event) => {
        if (!mobileDropdownBtn.contains(event.target) && !mobileDropdownMenu.contains(event.target)) {
            mobileDropdownMenu.classList.add("hidden");
        }
    });

    // Other event listeners (for progress bars, counters, forms, etc.) remain the same
    document.querySelectorAll(".progress-bar").forEach(bar => {
        bar.style.width = bar.getAttribute("data-width");
    });

    function animateCounters() {
        document.querySelectorAll(".counter").forEach(counter => {
            let target = +counter.getAttribute("data-target");
            let count = 0;
            let increment = target / 100;

            let updateCounter = setInterval(() => {
                count += increment;
                if (count >= target) {
                    counter.innerText = target;
                    clearInterval(updateCounter);
                } else {
                    counter.innerText = Math.floor(count);
                }
            }, 20);
        });
    }
    
    // Trigger animation when section comes into view
    let observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect(); // Run only once
            }
        });
    }, { threshold: 0.5 });

    observer.observe(document.getElementById("stats-section"));
    
    // Other form and carousel related event listeners...
    document.getElementById("quoteForm").addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Your quote request has been submitted!");
    });

    AOS.init({
        duration: 1000,
        once: true,
        mirror: false
    });

    let index = 0;
    const slides = document.querySelectorAll("#carousel img");
    const totalSlides = slides.length;

    function showSlide() {
        const carousel = document.getElementById("carousel");
        if (index >= totalSlides) {
            index = 0; // Reset to first image
        }
        carousel.style.transform = `translateX(${-index * 100}%)`;
        index++;
    }

    setInterval(showSlide, 3000); // Auto-slide every 3 sec

    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Form submitted successfully!");
    });

    // Blog toggle text
    function toggleText(button) {
        const shortText = button.previousElementSibling.querySelector('.short-text');
        const fullText = button.previousElementSibling.querySelector('.full-text');
        
        if (fullText.classList.contains('hidden')) {
            fullText.classList.remove('hidden');
            shortText.classList.add('hidden');
            button.textContent = "Read less";
        } else {
            fullText.classList.add('hidden');
            shortText.classList.remove('hidden');
            button.textContent = "Read more";
        }
    }

    document.getElementById("imageContainer").addEventListener("click", function() {
        this.classList.toggle("clicked");
    });
});
 // Mobile Menu Toggle
      const menuBtn = document.getElementById("menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const closeMenu = document.getElementById("close-menu");

        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.remove("hidden");
            mobileMenu.classList.remove("-translate-y-full");
        });

        closeMenu.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
            mobileMenu.classList.add("-translate-y-full");
        });

        // Mobile Dropdown Toggle
        const mobileDropdownBtn = document.getElementById("mobile-dropdown-btn");
        const mobileDropdownMenu = document.getElementById("mobile-dropdown-menu");

        mobileDropdownBtn.addEventListener("click", () => {
            mobileDropdownMenu.classList.toggle("hidden");
        });

        // Close dropdown when clicking outside
        document.addEventListener("click", (event) => {
            if (!mobileDropdownBtn.contains(event.target) && !mobileDropdownMenu.contains(event.target)) {
                mobileDropdownMenu.classList.add("hidden");
            }
        });



document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const closeMenuBtn = document.getElementById("close-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileDropdownBtn = document.getElementById("mobile-dropdown-btn");
    const mobileDropdownMenu = document.getElementById("mobile-dropdown-menu");

    // Open Menu
    menuBtn.addEventListener("click", function () {
        mobileMenu.classList.remove("-translate-y-full");
        mobileMenu.classList.add("translate-y-0");
    });

    // Close Menu
    closeMenuBtn.addEventListener("click", function () {
        mobileMenu.classList.remove("translate-y-0");
        mobileMenu.classList.add("-translate-y-full");
    });

    // Toggle Mobile Dropdown
    mobileDropdownBtn.addEventListener("click", function () {
        mobileDropdownMenu.classList.toggle("hidden");
    });
});


    
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("nav ul li a");

    function setActiveLink(clickedLink) {
        // Remove active class from all links
        navLinks.forEach(link => link.classList.remove("text-orange-500"));

        // Add active class to the clicked link
        clickedLink.classList.add("text-orange-500");

        // Store active link in localStorage to maintain state on refresh
        localStorage.setItem("activeNav", clickedLink.getAttribute("href"));
    }

    // Attach event listener to each navigation link
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            setActiveLink(this);
        });
    });

    // Maintain active state on page reload
    const activeNav = localStorage.getItem("activeNav");
    if (activeNav) {
        const activeLink = document.querySelector(`nav ul li a[href="${activeNav}"]`);
        if (activeLink) {
            setActiveLink(activeLink);
        }
    }
});