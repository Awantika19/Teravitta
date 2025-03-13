document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".progress-bar").forEach(bar => {
        bar.style.width = bar.getAttribute("data-width");
    });
});

document.addEventListener("DOMContentLoaded", function () {
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
});
document.getElementById("quoteForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Your quote request has been submitted!");
});

AOS.init({
    duration: 1000, // Animation duration (ms)
    once: true,     // Ensures animation happens only once
    mirror: false   // Disables animation when scrolling back up
});


//Carousel in media page
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

//contact section for submission
document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert("Form submitted successfully!");
});

//blog
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

 AOS.init();