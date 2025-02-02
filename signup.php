<?php
$pageTitle = 'Sign Up | Rosemary';
include_once 'includes/header.inc.php'
?>

<div style="background-image: url(images/static/colorful-ice-cream.webp); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center;" class="h-[--dont-overflow] flex items-center justify-center bg-red-200 rounded-lg">
    <div class="main bg-pink-100 shadow-md p-10 transition-transform w-96 text-center rounded-lg">
        <h1 class="text-pink-600 text-3xl">Start </h1>
        <h1 class="text-pink-600 text-3xl">Your Delicious</h1>
        <h1 class="text-pink-600 text-3xl">Adventure </h1>
        <h1 class="text-pink-600 text-3xl">Here!</h1>
        <form action="data.php" method="POST">
            <label for="username" class="block mt-4 mb-2 text-left text-gray-700 font-bold">Username</label>
            <input
                type="text"
                id="first"
                name="username"
                placeholder="Enter your Username"
                class="bg-pink-100 block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-400"
                required>

            <label for="password" class="block mb-2 text-left text-gray-700 font-bold">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your Password"
                class="bg-pink-100 block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-400"
                required>

            <div class="flex justify-center items-center">
                <button
                    type="submit"
                    class="bg-pink-600 text-white py-3 px-6 rounded-md cursor-pointer transition-colors duration-300 hover:bg-pink-500">
                    Join
                </button>
            </div>
        </form>
        <div class="flex justify-center mt-5 text-sm">
            Already have an account?&nbsp;&nbsp;<a class="text-pink-600 hover:text-pink-400" href="signin.php">Sign In</a>
        </div>

    </div>
    </body>

    </html>
