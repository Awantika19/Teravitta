<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
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
     <div class=" md:h-[500px] relative z-10 flex flex-col items-center justify-center h-[300px] text-white text-center bg-cover" style="background-image: url('images/About_Banner_Background.jpg');">
        <h1 class="text-5xl font-bold">About Us</h1>
        <p class="mt-2 flex items-center space-x-2">
            <span class="text-gray-300">🏠 Home</span> 
            <span class="text-orange-500">→ About Us</span>
        </p>
    </div>

    <!--About Us-->
    <div class="py-10">
        <div class="max-w-6xl mx-auto px-6 py-12 bg-white shadow-lg rounded-lg relative">

            <!-- Background Image -->
            <!-- <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-cover bg-center" style="background-image: url('images/About_Us_Section_Image.jpg');"></div> -->
    
            <!-- Content Section -->
            <div class="grid md:grid-cols-2 gap-8 items-center relative z-10">
                
                <!-- Image Section -->
                <div class="relative">
                    <div class="absolute top-6 left-6 w-72 h-80 bg-orange-500 rounded-md"></div>
                    <img src="images/About_Us_Section_Image.jpg" alt="Farmer" class="relative w-72 h-80 object-cover rounded-lg shadow-lg border-4 border-white" >
                </div>
    
                <!-- Text Content -->
                <div>
                    <h1 class="text-[#ff4e03]">About Teravitta-</h1>
                    <h2 class="text-4xl font-bold text-blue-900">
                        Your Gateway to International Agro-Business

                    </h2>
                    <p class="text-gray-600 mt-4">
                        Teravitta is a premier biennial international agriculture expo, designed to foster bilateral trade and drive the development of the agro-industry. Scheduled for February 2026, Teravitta will serve as a dynamic platform for leading agro-companies, national and international buyers, and sellers. We are committed to creating a space where industry leaders converge, innovative technologies are showcased, and valuable trade opportunities are realized. Teravitta aims to be a leading international business platform in India, facilitating connections and promoting sustainable growth in the agricultural sector.</p>
                   
                    
                    <!-- Statistics -->
                    <!-- <div class="mt-6 grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-blue-900">35+</h3>
                            <p class="text-gray-600 text-sm">Our Team</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-blue-900">75+</h3>
                            <p class="text-gray-600 text-sm">Our Shop</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-3xl font-bold text-blue-900">150+</h3>
                            <p class="text-gray-600 text-sm">Our Brand</p>
                        </div>
                    </div> -->
    
                    <!-- Signature & Contact -->
                    <div class="flex items-center mt-6">
                        <h3>Email :</h3>
                        <div class="ml-6 border-l-2 border-gray-300 pl-6">
                            <p class="text-gray-600">Mail us</p>
                            <p class="text-xl font-semibold text-blue-900">info@teravitta.com</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

<!---->
<div class="bg-black py-7">
    <div class="max-w-6xl mx-auto my-10 flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Left Side - Image -->
        <div class="md:w-1/2 relative">
            <img src="images/blog_3.jpg" alt="Fresh Vegetables" class="w-full h-full object-cover">
            <div class="absolute top-4 left-4 bg-green-800 text-white px-4 py-2 rounded-md">
                <span class="font-bold">Teravitta Insights: Cultivating the Future of Agriculture
                </span>
            </div>
            <div class="absolute bottom-4 left-4 bg-green-800 text-white px-4 py-2 rounded-md">
                <p class="font-bold">Keynote Speaker Spotlight: Insights from Industry Leaders at Teravitta
                </p>
            </div>
        </div>
        
        <!-- Right Side - Text Content -->
        <div class="md:w-1/2 bg-green-700 text-white p-10 flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-4">Get a sneak peek into the insightful keynote speeches that will be delivered at Teravitta. We highlight the key topics and speakers who will be sharing their expertise and vision for the future of agriculture.
            </p>
            <button class="px-6 py-2 border border-white text-white hover:bg-white hover:text-green-700 transition duration-300">Discover More</button>
        </div>
    </div>
</div>

<!--Missions and visions-->
<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto my-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Left Side Images -->
            <div class="relative">
                <img src="images/Mission.jpg" alt="Farmer" class="w-2/4 rounded-lg shadow-md">
                <img src="images/Vision.jpg" alt="Child in farm" class="w-1/2 absolute -bottom-10 right-10 rounded-lg shadow-lg border-4 border-white">
            </div>
            
            <!-- Right Side Content -->
            <div class="py-10">
                <p class="text-orange-500 font-semibold">Our Mission
                </p>
                <h2 class="text-3xl font-bold mt-2">Empowering Global Agricultural Connections
                </h2>
                <p class="text-gray-600 mt-4">Our mission is to attract and attain customers with high-value agro-products and to forge connections that empower countries to meet their agricultural needs. We strive to create a platform that facilitates meaningful partnerships, drives innovation, and promotes sustainable agricultural practices on a global scale.
                    Vision.</p>
                
                    <div class="py-3">
                        <p class="text-orange-500 font-semibold">Our Vision:  </p>
                        <h2 class="text-3xl font-bold mt-2">Global Leadership Through Stakeholder Value Creation
                        </h2>
                        <p class="text-gray-600 mt-4">Our vision is to serve the global community by creating long-term stakeholder value. We aim to be a catalyst for positive change in the agricultural sector, fostering growth, sustainability, and prosperity for all our partners and participants.</p>
                        
                       
                    </div>
                </div>
               
            </div>
        </div>

        <!-- carousol -->
        <div class= "bg-gray-100 flex justify-center items-center">
            <div class="carousel-container w-full max-w-7xl">
                <div class="carousel-track">
                    <img src="images/media/aajtak.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/abp.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/bbc.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/cnbc.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/express.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/foxnews.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/indiatoday.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/indiatv.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/ndtv.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/newyork.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/skynews.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/tass.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/thehindu.jpg" class="w-60 h-40 object-cover rounded-lg">
                    <img src="images/media/thetimes.jpg" class="w-60 h-40 object-cover rounded-lg">
                </div>
            </div>
            
        </div>
        
        <!-- Bottom Section -->
        <!-- <div class="flex grid-cols-1 md:grid-cols-3 gap-6 mt-5 p-6 bg-gray-100 rounded-lg justify-between items-center">
            <div class="flex items-center space-x-4">
                <span class="text-orange-500 text-4xl">🏅</span>
                <div>
                    <p class="font-bold text-lg">25 Years Of Experience</p>
                    <p class="text-gray-600 text-sm">All about planting and owing trees.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-orange-500 text-4xl">👨‍🌾</span>
                <div>
                    <p class="font-bold text-lg">Experienced Workers</p>
                    <p class="text-gray-600 text-sm">All about planting and owing trees.</p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-orange-500 text-4xl">🏆</span>
                <div>
                    <p class="font-bold text-lg">100+ Awards Win</p>
                    <p class="text-gray-600 text-sm">All about planting and owing trees.</p>
                </div>
            </div>
        </div> -->
</div>
<!--Parteners-->
<div class="bg-gray-100 py-10">
    <div class="text-center mb-10">
        <h3 class="text-orange-600 font-semibold">Our Partners</h3>
        <h1 class="text-3xl font-bold mt-2">Our Valued Partners: Collaborating for Success</h1>
        <div class="w-56 h-1 bg-orange-600 mx-auto mt-2"></div>
    </div>
    
    <div class="flex mx-auto flex-col md:flex-row justify-center items-center gap-8 px-5">
        <!-- Gardener Card 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-[90%] md:w-[30%]" >
            <img src="images/owner/leader1.jpg" alt="Lara Christine" class="w-full object-cover" data-aos="zoom-in">
            <div class="p-5 text-center">
                
                <h2 class="text-xl font-semibold">Mr. Sazzad Zahir</h2>
                <p class="text-gray-500">President</p>
            </div>
        </div>
        
        <!-- Gardener Card 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden w-[90%] md:w-[30%]">
            <img src="images/owner/leader2.jpg" alt="Lara Christine" class="w-full object-cover"  data-aos="zoom-in">
            <div class="p-5 text-center">
                
                <h2 class="text-xl font-semibold">Mr. Sanjeev Bose</h2>
                <p class="text-gray-500">Associate vice president (Expo)</p>
            </div>
        </div>
        <!-- Gardener Card 3 -->
        <!-- <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="images/About_Banner_Background.jpg" alt="Lara Christine" class="w-full h-64 object-cover" data-aos="zoom-in">
            <div class="p-5 text-center">
                
                <h2 class="text-xl font-semibold">Lara Christine</h2>
                <p class="text-gray-500">Landscaper</p>
            </div>
        </div> -->
    </div>  
</div>

<!--CTA-->
<div>
    <section class="flex items-center justify-center py-20 bg-cover bg-center bg-no-repeat text-white text-center px-6 "
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