<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        .carousel-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
        }
        .carousel-track {
            display: flex;
            gap: 20px;
            animation: scrollLeft 15s linear infinite;
            width: max-content;
        }
        @keyframes scrollLeft {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }
    </style>
</head>
<body>
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
    
 <!-- Page Title -->
    <div class=" md:h-[500px] relative z-10 flex flex-col items-center justify-center h-[300px] text-white text-center bg-cover text-center py-8 bg-cover bg-center" style="background-image: url('images/About_Banner_Background.jpg');">
            <h1 class="text-5xl font-bold">Media</h1>
            <p class="mt-2 flex items-center space-x-2">
                <span class="text-gray-300">🏠 Home</span> 
                <span class="text-orange-500">→ Media</span>
            </p>
    </div>

<!--Carousel-->
@include('layouts.carousel')

<!--images-->
<div class="container mx-auto p-24 ">
    <div id="gallery" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Images with Hover Effect -->
        <img src="images/Frame 9.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 w-fit border border-3px-black">
        <img src="images/Frame 11.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 border border-3px-black">
        <img src="images/Frame 12.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 border border-3px-black">
        <img src="images/Frame 13.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 border border-3px-black">
        <img src="images/Frame 14.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 border border-3px-black">
        <img src="images/Frame 15.jpg" alt="" class="hover:scale-105 hover:shadow-lg transition-transform duration-300 border border-3px-black">
    </div>
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
<!-- AOS JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>



    <script src="script.js"></script>
</body>
</html>