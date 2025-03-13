<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teravitta Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body >
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-lg shadow-md text-black p-4 flex justify-between items-center z-50">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="images/TERAVITTA-logo.png" alt="Logo" class="w-32">
        </div>
    
        <!-- Desktop Navigation -->
        <ul class="hidden md:flex space-x-6">
            <li><a href="#" class="text-orange-500">Home</a></li>

            <!-- Dropdown Parent -->
            <li class="relative group">
                <a href="#" class="hover:text-orange-500">Programme ▼</a>
                <!-- Dropdown Menu -->
                <ul class="absolute left-0 hidden group-hover:block  bg-white text-black shadow-lg rounded-md w-40">
                    <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Agenda</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Speakers</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Sessions</a></li>
                </ul>
            </li>

            <li><a href="#" class="hover:text-orange-500">Overview</a></li>
            <li><a href="#" class="hover:text-orange-500">Blog</a></li>
            <li><a href="#" class="hover:text-orange-500">Event</a></li>
            <li><a href="#" class="hover:text-orange-500">Contact Us</a></li>
        </ul>

        <!-- Buttons -->
        <div class="flex space-x-4  hidden lg:block" >
            <a href="#" class="bg-[#ff4e02] text-white px-4 py-2 rounded-full border border-white hover:bg-[##3d8a2c] transition-all">
                EXPRESS INTEREST
            </a>
            <a href="#" class="bg-[#3d8a2c] text-white px-4 py-2 rounded-full border border-white hover:bg-[#ff4e02] transition-all">
                REGISTER NOW
            </a>
        </div>
    
        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="lg:hidden text-2xl focus:outline-none">
            <i class="fa-solid fa-bars"></i> <!-- FontAwesome Menu Icon -->
        </button>
    
        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-full bg-white shadow-lg p-6 hidden flex-col z-50 transition-transform transform -translate-y-full">
            <button id="close-menu" class="text-3xl absolute top-4 right-6">&times;</button>
            <ul class="flex flex-col space-y-6 text-center mt-12">
                <li><a href="#" class="text-orange-500">Home</a></li>
                
                <!-- Mobile Dropdown -->
                <li class="relative">
                    <button id="mobile-dropdown-btn" class="hover:text-orange-500 flex items-center justify-center w-full">
                        Programme ▼
                    </button>
                    <ul id="mobile-dropdown-menu" class="hidden mt-2 bg-white text-black shadow-lg rounded-md w-full">
                        <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Agenda</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Speakers</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-orange-400">Sessions</a></li>
                    </ul>
                </li>

                <li><a href="#" class="hover:text-orange-500">Overview</a></li>
                <li><a href="#" class="hover:text-orange-500">Blog</a></li>
                <li><a href="#" class="hover:text-orange-500">Event</a></li>
                <li><a href="#" class="hover:text-orange-500">Contact Us</a></li>
            </ul>
            <div class="flex space-x-4 justify-center">
                <a href="#" class="bg-[#ff4e02] text-white px-4 py-2 rounded-full border border-white hover:bg-[##3d8a2c] transition-all">
                    EXPRESS INTEREST
                </a>
                <a href="#" class="bg-[#3d8a2c] text-white px-4 py-2 rounded-full border border-white hover:bg-[#ff4e02] transition-all">
                    REGISTER NOW
                </a>
            </div>
        </div>
    </nav>

    
    <!-- Banner (with padding to prevent hiding) -->
    <div class="pt-16">
        <header class="">
            <img src="images/Banner.jpg" alt="Banner Image" class="w-full  object-cover">
        </header>
    </div>
<!--Overview-->
<div class="py-16">
    <section class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Left Side -->
        <div class="grid grid-col-2 items-center justify-between">
            <!-- <div class="bg-green-900 text-white p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-semibold">We Are Trusted</h3>
                    <p class="text-lg font-bold">Happy <span class="text-orange-500">6000</span> Clients</p>
                </div>
               
                <button class="bg-orange-500 p-2 text-white rounded-full w-10 h-10">+</button>
            </div> -->
            <div data-aos="fade-right">
                <img src="images/About Image two.jpg" alt="">
            </div>
        </div>

        <div>
            <img src="images/About Img one.jpg" alt="Farmer Image" class="w-full h-full object-cover ">
        </div>
        <!-- Right Side -->
        <div>
            <h4 class="text-orange-500">Overview</h4>
            <h2 class="text-4xl font-bold text-blue-900">Teravitta: A Gateway to Global Agro-Business.</h2>
            <p class="text-gray-600 mt-4">Teravitta is designed to be the definitive international trade platform for agro-products. This biennial event will bring together leading companies, national and international buyers, and sellers, fostering collaboration and driving industry growth. We are committed to facilitating meaningful business interactions, showcasing innovative technologies, and promoting the future of agriculture. Teravitta 2026 is your opportunity to be part of a transformative agricultural movement.</p>
            <div class="grid grid-cols-2 gap-4 mt-6">
            </div>
            <div class="mt-6 flex items-center space-x-4">
                <button class="bg-[#ff4e03] text-white px-6 py-2 rounded-lg">More About</button>
            </div>
        </div>
    </section>  
</div>

<!--planning-->
<div >
    <div class="flex flex-col md:flex-row items-center justify-center min-h-screen">
        <div class="bg-blue-900 text-white p-10 ">
            <h3 class="text-[#FF743A] text-lg font-semibold">Planning</h3>
            <h2 class="text-4xl font-bold mt-2">Strategic Planning for Success at Teravitta</h2>
            <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Maximized Experience and Business Potential:</b> Teravitta 2026 is meticulously planned to ensure a highly beneficial experience for all participants.</p>
                <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Keynote Speeches from Industry Leaders:</b>  Gain valuable insights from prominent figures shaping the future of agriculture.</p>
                    <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Dedicated Business Networking Sessions: </b>Connect with potential partners, buyers, and sellers in a structured and productive environment.</p>
                    <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Opportunities for Trade Deals: </b>Facilitate and finalize business transactions directly on the expo floor. 
                    </p>
                    <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Integration of Virtual Tours:</b> Enable global participation through online platforms, reaching those unable to attend in person. 
                    </p>
                    <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Focus on Future Initiatives:</b>Explore and contribute to projects that will drive innovation and sustainability in the agricultural sector. 
 
                    </p>
                    <p class="mt-4 text-gray-300"><b class="text-[#FF743A]">Detailed Schedules, Speakrgb(255 116 58)]ncements, and Exhibitor Information:</b>Stay informed as we finalize our preparations and release updated details. 
                    </p>
        </div>
        <div class="md:w-1/2 w-full  " >
            <img src="images/Planning_Image.jpg" alt="Agriculture Image" class="w-full  object-cover h-[580px]">

        </div>
    </div>

</div>
<!--What we offer-->
<div>
    <section class="py-12 text-center">
        <h2 class="text-orange-600 font-semibold text-lg">What We Offer</h2>
        <h1 class="text-4xl font-bold text-gray-900 mt-2">Teravitta Insights: Cultivating the Future of Agriculture
        </h1>
        
        <div class="grid md:grid-cols-3 gap-8 px-8 mt-10 max-w-6xl mx-auto">
            <div class=" blog bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="images/Blog 1.jpg" alt="Crop Protection" class="w-full h-64 object-cover">
                <div class="p-6 ">
                    <h3 class="text-xl font-semibold">The Future of Bilateral Trade in Agro-Products: Teravitta 2026's Vision</h3>
                    <p class="text-gray-600 mt-2">Explore how Teravitta is fostering stronger international partnerships.
                    </p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block hover:underline">View More →</a>
                </div>
            </div>
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="images/Blog 2.jpg" alt="Stone & Hardscaping" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Technology Integration: Revolutionizing Agricultural Practices at Teravitta
                    </h3>
                    <p class="text-gray-600 mt-2">Discover the latest technological innovations showcased at Teravitta 2026.</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block hover:underline">View More →</a>
                </div>
            </div>
            
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="images/Blog 3.jpg" alt="Forest & Tree Planting" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold">Keynote Speaker Spotlight: Insights from Industry Leaders at Teravitta
                    </h3>
                    <p class="text-gray-600 mt-2">Get a sneak peek into the insightful keynote speeches that will be delivered</p>
                    <a href="#" class="text-blue-600 font-semibold mt-4 inline-block hover:underline">View More →</a>
                </div>
            </div>
        </div>

        <p class="mt-10 text-gray-700">Don't hesitate, contact us for better help and services. <a href="#" class="text-orange-600 font-semibold hover:underline">Contact Us→</a></p>
    </section>
</div>

<!--CTA-->
<div>
    <section class="flex items-center justify-center min-h-screen bg-cover bg-center bg-no-repeat text-white text-center px-6 "
        style="background-image: url('images/CTA\ BG.jpg');">
        <div class="max-w-3xl bg-black bg-opacity-50 p-10 rounded-lg">
            <div class="relative inline-block">
                <span class="absolute -top-2 -left-5 text-2xl">✨</span>
                <h1 class="text-3xl sm:text-5xl font-semibold leading-tight">
                    Secure Your Place at Teravitta 2026: Register Today

                </h1>
            </div>
            <p class="mt-4 text-lg text-gray-300">
                Join us at Teravitta 2026 and cultivate your future in global agriculture.
 </p>
            <button class="mt-6 px-6 py-3 bg-[#ff4e03] hover:bg-indigo-600 text-white text-lg font-medium rounded-lg shadow-lg transition">
                Register Now    
            </button>
        </div>
    </section>
</div>

<!-- Main Footer -->
<footer class="bg-gray-900 text-white py-12 flex ">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 px-6 justify-between items-center">
        
        <!-- About Section -->
        <div>
            <h2 class="text-xl font-bold flex items-center space-x-2">
                <span class="text-red-500">Teravitta
            </h2>
            <p class="text-gray-400 mt-3">
                Follow us for the latest updates, event news, and exclusive content.
            </p>
            <div class="flex space-x-3 mt-4">
                <a href="#" class="w-[40px] text-center p-2 bg-gray-700 rounded-full"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="w-[40px] text-center p-2 bg-gray-700 rounded-full"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="#" class="w-[40px] text-center p-2 bg-gray-700 rounded-full"><i class="fa-brands fa-twitter"></i></i></a>
                <a href="#" class="w-[40px] text-center p-2 bg-gray-700 rounded-full"><i class="fa-brands fa-linkedin"></i></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-xl font-bold border-b-2 border-orange-500 pb-2">Quick Links</h3>
            <ul class="mt-4 space-y-2 text-gray-400">
                <li>➤ Overview</li>
                <li>➤ Our Blogs</li>
                <li>➤ Events</li>
                <li>➤ Contact Us</li>
            </ul>
        </div>

        <!-- Contact Form -->
        <div>
            <h3 class="text-xl font-bold border-b-2 border-orange-500 pb-2">Contact Us</h3>
            <div class="mt-4 text-gray-400">
                <p>📧 info@example.com</p>
                <p>📞 123-456-7890</p>
                <div class="mt-4 flex">
                    <input type="email" placeholder="Your Email Address" class="p-2 rounded-l w-full text-black">
                    <button class="bg-orange-500 px-4 py-2 rounded-r">→</button>
                </div>
                <label class="flex items-center space-x-2 mt-3">
                    <input type="checkbox">
                    <span>I agree with the <a href="#" class="underline text-orange-400">Privacy Policy</a></span>
                </label>
            </div>
        </div>

    </div>
</footer>

<!-- Bottom Bar -->
<div class="bg-orange-500 text-white text-center py-3">
    © 2025 Charitics. All rights reserved | <a href="#" class="underline">Terms & Conditions</a> | <a href="#" class="underline">Privacy Policy</a>
</div>
<script src="script.js"></script>

<script>
    


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
</script>
</body>
</html>
