<?php
$pageTitle = 'Contact Us | Rosemary';
include_once 'includes/header.inc.php'
?>
<div class="h-[--dont-overflow] flex items-center justify-center p-4 border border-pink-300 rounded-lg shadow">
    <div class="w-[400px] text-center p-[30px] rounded-xl">
        <h1 class="my-10 text-5xl font-bold text-pink-600">Contact us</h1>
        <form class="flex flex-col gap-4">
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Your Name</label>
                <input type="text" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="Sanadee Dinayana">
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Your Email</label>
                <input type="email" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="sanadee2004@email.com">
            </div>
            <div>
                <label class="block m-2 text-xl font-medium text-pink-600">Your Message</label>
                <textarea rows="4" class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64" placeholder="Leave a comment..."></textarea>
            </div>
        </form>
        <div class="flex justify-center mt-5 space-x-4">
            <a href="https://www.instagram.com" class="flex items-center px-4 py-2 text-pink-100 bg-pink-700 rounded-lg hover:scale-125 transition-all duration-500 m-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 mr-2">
                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                </svg>
                Instagram
            </a>
            <a href="https://www.facebook.com" class="flex items-center px-4 py-2 text-pink-100 bg-pink-700 rounded-lg hover:scale-125 transition-all duration-500 m-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="h-6 mr-2">
                    <path fill="currentColor" d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                </svg>
                Facebook
            </a>
        </div>
    </div>
</div>
</body>

</html>
