<?php
include_once 'includes/header.inc.php';
?>

<!-- Hero Section -->
<div class="flex justify-center items-center m-10">
    <div class="bg-pink-400/50 rounded p-10 max-w-2xl hover:scale-125 transition-all duration-500">
        <h2 class="text-5xl font-extrabold text-teal-50 text-center">Healthy Cake For You</h2>
    </div>
</div>

<!-- Featured Product -->
<div class="flex justify-center items-center m-10">
    <div class="flex flex-col items-center bg-pink-200/50 p-10 rounded max-w-3xl hover:scale-125 transition-all duration-500">
        <h3 class="text-3xl text-pink-600 font-semibold text-center mb-6">Featured Product</h3>
        <img src="images/static/BlueberryCake.webp" alt="Blueberry Layer Cake" class="w-[300px] h-[200px] object-cover rounded-lg mb-4">
        <h4 class="text-2xl font-bold text-pink-700 mb-2">Blueberry Layer Cake</h4>
        <p class="text-lg text-pink-800 text-center">A delightful combination of moist layers and fresh blueberry flavor, perfect for any celebration.</p>
    </div>
</div>

<!-- Overview of products -->
<div class="flex justify-center items-center">
    <div class="bg-pink-400/50 rounded max-w-6xl">
        <h3 class="text-5xl text-pink-50 font-semibold text-center pt-10">Our Specialties</h3>
        <div class="flex justify-center gap-10 p-10">
            <div class="cursor-pointer group overflow-hidden relative text-pink-100 max-w-[300px] min-w-[250px] mx-auto transition-all duration-500 hover:scale-125 hover:z-10 rounded">
                <div class="flex items-center justify-center w-full aspect-[4/3] p-4 bg-pink-200">
                    <img src="images/static/Cupcakes.jpg" alt="Cupcake" class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="bg-pink-600 w-full p-3 text-center">
                    <span class="text-pink-100 text-2xl font-semibold">Cupcake</span>
                </div>
                <div class="absolute bg-pink-600 bottom-0 w-full p-4 text-center text-pink-100 text-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    Fluffy and delicious, baked with love.
                </div>
            </div>
            <div class="cursor-pointer group overflow-hidden relative text-pink-100 max-w-[300px] min-w-[250px] mx-auto transition-all duration-500 hover:scale-125 hover:z-10 rounded">
                <div class="flex items-center justify-center w-full aspect-[4/3] p-4 bg-pink-200">
                    <img src="images/static/Cake.webp" alt="Cake" class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="bg-pink-600 w-full p-3 text-center">
                    <span class="text-pink-100 text-2xl font-semibold">Cake</span>
                </div>
                <div class="absolute bg-pink-600 bottom-0 w-full p-4 text-center text-pink-100 text-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    Perfect for celebrations, fresh and moist.
                </div>
            </div>
            <div class="cursor-pointer group overflow-hidden relative text-pink-100 max-w-[300px] min-w-[250px] mx-auto transition-all duration-500 hover:scale-125 hover:z-10 rounded">
                <div class="flex items-center justify-center w-full aspect-[4/3] p-4 bg-pink-200">
                    <img src="images/static/donut.webp" alt="Donut" class="max-w-full max-h-full object-contain transition-transform duration-500 group-hover:scale-105">
                </div>
                <div class="bg-pink-600 w-full p-3 text-center">
                    <span class="text-pink-100 text-2xl font-semibold">Donut</span>
                </div>
                <div class="absolute bg-pink-600 bottom-0 w-full p-4 text-center text-pink-100 text-xl opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    Sweet treats with a variety of toppings.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The footer... maybe -->
<div class="flex flex-row justify-center gap-10 m-10">
    <div class="text-center transition-all duration-500 hover:scale-125">
        <img class="h-20 w-20 mx-auto mb-2" src="secure.png" alt="Safe Payment">
        <h4 class="font-semibold text-xl">Safe Payment</h4>
    </div>
    <div class="text-center transition-all duration-500 hover:scale-125">
        <img class="h-20 w-20 mx-auto mb-2" src="flavor.png" alt="Authentic Flavors">
        <h4 class="font-semibold text-xl">100% Authentic Flavors</h4>
    </div>
    <div class="text-center transition-all duration-500 hover:scale-125">
        <img class="h-20 w-20 mx-auto mb-2" src="quality.png" alt="Quality Guaranteed">
        <h4 class="font-semibold text-xl">Shop with Confidence</h4>
    </div>
</div>

</body>

</html>