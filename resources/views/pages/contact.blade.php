<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @include('layouts.css')
</head>
<body>
     <!-- Navbar -->
   @include('layouts.navbar')

<!-- Page Title -->
<div class=" md:h-[500px] relative z-10 flex flex-col items-center justify-center h-[300px] text-white text-center bg-cover text-center py-8 bg-cover bg-center" style="background-image: url('images/About_Banner_Background.jpg');">
        <h1 class="text-5xl font-bold">Contact Us</h1>
        <p class="mt-2 flex items-center space-x-2">
            <span class="text-gray-300">🏠 Home</span> 
            <span class="text-orange-500">→ Contact us</span>
        </p>
</div>

    <!--Contact us-->
    <div class="bg-gray-100 flex justify-center items-center min-h-screen">
        <div class="container mx-auto p-24 justify-between items-center">
            <!-- Contact Section -->
            <div class="bg-white p-8 shadow-lg rounded-lg flex flex-col md:flex-row items-center">
                <!-- Left Side: Contact Image -->
                <div class="w-fit md:w-1/2 flex justify-center">
                    <img src="images/Contact_Image.png" alt="Contact Us" class="w-3/4 md:w-half">
                </div>
    
                <!-- Right Side: Contact Form -->
                <div class="w-full md:w-1/2">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Contact Us</h2>
                   
                    <form id="contactForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Full Name*" class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <input type="text" placeholder="Phone Number*" class="border p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <input type="email" placeholder="Email Address*" class="border p-3 w-full mt-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <input type="text" placeholder="Subject" class="border p-3 w-full mt-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <select class="border p-3 w-full mt-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>Services</option>
                            <option>General Inquiry</option>
                            <option>Support</option>
                        </select>
                        <textarea placeholder="Write a message..." class="border p-3 w-full mt-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        <button type="submit" class="bg-black text-white w-full p-3 mt-4 rounded-md hover:bg-gray-800 transition">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <!-- Main Footer -->
@include('layouts.footer')

@include('layouts.script')

</body>
</html>