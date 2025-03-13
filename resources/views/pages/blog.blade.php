<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
  @include('layouts.css')
       
    </style>
</head>
<body>
<!-- Navbar -->
    @include('layouts.navbar')

<!-- Page Title -->
<div class=" md:h-[500px] relative z-10 flex flex-col items-center justify-center h-[300px] text-white   text-center py-8 bg-cover bg-center" style="background-image: url('images/About_Banner_Background.jpg');">
        <h1 class="text-5xl font-bold">Blog</h1>
        <p class="mt-2 flex items-center space-x-2">
            <span class="text-gray-300">🏠 Home</span> 
            <span class="text-orange-500">→ Blog</span>
        </p>
</div>

<!--Blog images-->
<div class="p-24">
    <div class="flex justify-center items-center font-bold text-4xl text-center">
        <h1>Teravitta Insights: Cultivating the Future of Agriculture</h1>
    </div>
    
    <div class="container mx-auto py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Blog Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img src="images/Blo1.jpg" alt="Blog Image" class="w-full h-64 object-cover hover-zoom">
                </div>
              <div class="p-5">
                <h2 class="text-xl font-semibold">The Future of Bilateral Trade in Agro-Products: Teravitta 2026's Vision</h2>
                <p class="text-gray-700">
                    <span class="short-text">Explore how Teravitta is fostering stronger international...</span>
                    <span class="full-text hidden">Explore how Teravitta is fostering stronger international partnerships and driving bilateral trade agreements in the agricultural sector. Learn about the key trends and opportunities shaping the future of global agro-commerce.</span>
                </p>
                <button class="text-blue-600 mt-2 focus:outline-none" onclick="toggleText(this)">Read more</button>
              </div>
        
            </div>
    
            <!-- Blog Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img src="images/Blog2.jpg" alt="Blog Image" class="w-full h-64 object-cover hover-zoom">
                </div>
                <div class="p-5">
                    <h2 class="text-xl font-semibold">Technology Integration: Revolutionizing Agricultural Practices at Teravitta
                    </h2>
                    <p class="text-gray-700">
                        <span class="short-text">Discover the latest technological innovations showcased...</span>
                        <span class="full-text hidden">Discover the latest technological innovations showcased at Teravitta 2026. From precision farming to sustainable solutions, see how technology is transforming the agricultural landscape.</span>
                    </p>
                    <button class="text-blue-600 mt-2 focus:outline-none" onclick="toggleText(this)">Read more</button>
                  </div>
            </div>
    
            <!-- Blog Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img src="images/Blog3.jpg" alt="Blog Image" class="w-full h-64 object-cover hover-zoom">
                </div>
                <div class="p-5">
                    <h2 class="text-xl font-semibold">Keynote Speaker Spotlight: Insights from Industry Leaders at Teravitta                    </h2>
                    <p class="text-gray-700">
                        <span class="short-text">Get a sneak peek into the insightful keynote speeches...</span>
                        <span class="full-text hidden">Get a sneak peek into the insightful keynote speeches that will be delivered at Teravitta. We highlight the key topics and speakers who will be sharing their expertise and vision for the future of agriculture.</span>
                    </p>
                    <button class="text-blue-600 mt-2 focus:outline-none" onclick="toggleText(this)">Read more</button>
                  </div>
            </div>
        </div>
    </div>
</div>

 <!-- Main Footer -->
 @include('layouts.footer')
@include('layouts.script')
</body>
</html>