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