<?php
include_once 'includes/header.inc.php';
?>

<h2 class="mb-10 mt-10 text-5xl font-extrabold md:text-5xl text-pink-700 text-center">Healthy Cakes For You</h2>

<h3 class="mb-4 text-3xl text-pink-600 font-semibold text-center">Features of Our Website</h3>
<div class="flex flex-wrap justify-center gap-12 my-5">
    <div class="feature-item text-center">
        <img class="h-20 w-20 mx-auto mb-2" src="images/icons/credit-card-secure.svg" role="img" alt="Safe Payment">
        <h4 class="font-semibold text-xl">Safe Payment</h4>
        <p class="text-gray-600">Cash on Delivery</p>
    </div>
    <div class="feature-item text-center">
        <img class="h-20 w-20 mx-auto mb-2" src="images/icons/healthy.svg" alt="Authentic Flavors">
        <h4 class="font-semibold text-xl">100% Authentic Flavors</h4>
        <p class="text-gray-600">Freshly Baked Every Day</p>
    </div>
    <div class="feature-item text-center">
        <img class="w-20 mx-auto mb-2" src="images/icons/quality.svg" alt="Quality Guaranteed">
        <h4 class="font-semibold text-xl">Shop with Confidence</h4>
        <p class="text-gray-600">Guaranteed Quality</p>
    </div>
</div>

<h3 class="text-3xl text-pink-600 font-semibold text-center mb-6">Featured Product</h3>
<div class="featured-product flex flex-col items-center bg-pink-100 p-6 rounded-lg shadow-md mx-6">
    <img src="images/static/BlueberryCake.webp" alt="Blueberry Layer Cake" class="w-[300px] h-[200px] object-cover rounded-lg mb-4">
    <h4 class="text-2xl font-bold text-pink-700 mb-2">Blueberry Layer Cake</h4>
    <p class="text-lg text-gray-700">A delightful combination of moist layers and fresh blueberry flavor, perfect for any celebration.</p>
</div>

<h3 class="text-3xl text-pink-600 font-semibold text-center mt-10 mb-10">Our Specialties</h3>
<div class="grid grid-cols-2 md:grid-cols-3 gap-6 px-4">
    <div class="flex flex-col items-center">
        <img class="w-[200px] h-[150px] object-cover rounded-lg mb-2" src="images/static/Cupcakes.webp" alt="Cupcake">
        <h4 class="font-semibold text-xl">Cupcake</h4>
        <p class="text-gray-600 text-center">Fluffy and delicious, baked with love.</p>
    </div>
    <div class="flex flex-col items-center">
        <img class="w-[200px] h-[150px] object-cover rounded-lg mb-2" src="images/static/Cake.webp" alt="Cake">
        <h4 class="font-semibold text-xl">Cake</h4>
        <p class="text-gray-600 text-center">Perfect for celebrations, fresh and moist.</p>
    </div>
    <div class="flex flex-col items-center">
        <img class="w-[200px] h-[150px] object-cover rounded-lg mb-2" src="images/static/donut.webp" alt="Doughnut">
        <h4 class="font-semibold text-xl">Doughnut</h4>
        <p class="text-gray-600 text-center">Sweet treats with a variety of toppings.</p>
    </div>
</div>
</body>

</html>
