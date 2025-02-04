<?php
$pageTitle = 'Sign Up | Rosemary';
include_once 'includes/header.inc.php'
?>

<div style="background-image: url(images/static/colorful-ice-cream.webp); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center;" class="h-[--dont-overflow] flex items-center justify-center bg-red-200 rounded-lg">
    <div class="main bg-pink-100 shadow-md p-10 transition-transform w-96 text-center rounded-lg">
        <h1 class="text-pink-600 text-3xl">Start<br>Your Delicious<br>Adventure<br>Here!</h1>
        <form action="signup_handler.php" method="POST">
            <div class="relative mb-6">
                <label for="username" class="block mt-4 mb-2 text-left text-gray-700 font-bold">Username</label>
                <input
                    type="text"
                    id="uname"
                    name="username"
                    placeholder="Enter your Username"
                    class="bg-pink-100 block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-400"
                    required>
                <button type="button" id="genbtn" class="absolute right-4 top-10 bottom-0 px-2 h-fit text-gray-400 rounded-md hover:opacity-50"><i class="fa-solid fa-arrows-rotate"></i></button>
            </div>
            <div>
                <label for="email" class="block mt-4 mb-2 text-left text-gray-700 font-bold">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your Email"
                    class="bg-pink-100 block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-400"
                    required>
            </div>
            <div>
                <label for="password" class="block mb-2 text-left text-gray-700 font-bold">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your Password"
                    class="bg-pink-100 block w-full mb-6 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-pink-400"
                    required>
            </div>
            <div class="checkbox mb-3">
                <div class="cf-turnstile" data-sitekey="0x4AAAAAAA7WFYd1UNGvHrcb" data-theme="light" data-size="flexible"></div>
            </div>
            <div class="flex justify-center items-center">
                <button
                    name="submit"
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
    <script>
        const genbutton = document.getElementById('genbtn');
        const unamefield = document.getElementById('uname')
        genbutton.addEventListener('click', async () => {
            genbutton.classList.add('text-pink-700');
            const data = await fetch('https://usernameapiv1.vercel.app/api/random-usernames');
            (!data.ok) ?? genbutton.classList.add('text-red-700');
            const data_fmt = await data.json();
            const username = data_fmt.usernames[0];
            unamefield.value = `${username}`;
            genbutton.classList.remove('text-pink-700');
        })
    </script>
    </body>

    </html>
