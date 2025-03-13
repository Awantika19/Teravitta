<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teravitta</title>
    @include('layouts.css')

</head>
<body >
    @include('layouts.navbar')

    
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
<!--cta-->
@include('layouts.cta')

<!-- Main Footer -->
@include('layouts.footer')

@include('layouts.script')


</body>
</html>
