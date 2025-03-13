<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media page</title>
    @include('layouts.css')
</head>
<body>
  <!-- Navbar -->
  @include('layouts.navbar')
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
@include('layouts.footer') 
<!-- AOS JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>



@include('layouts.script')
</body>
</html>