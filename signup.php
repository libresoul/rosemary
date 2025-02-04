<?php
$pageTitle = 'Sign Up | Rosemary';
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';
?>

<div class="h-[--dont-overflow] flex items-center justify-center rounded">
    <div class="p-10 transition-transform w-xl text-center rounded">
        <h1 class="text-pink-600 text-5xl font-bold">Start Your<br>Delicious<br>Adventure Here!</h1>
        <form action="signup_handler.php" method="POST" class="m-10">
            <?php handleSignErrors(); ?>
            <div class="relative">
                <label for="username" class="block m-2 text-xl font-medium text-pink-600">Username</label>
                <input
                    type="text"
                    id="uname"
                    name="username"
                    minlength="4"
                    maxlength="20"
                    placeholder="Create a username"
                    class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64"
                    required>
                <button type="button" id="genbtn" class="absolute right-0 top-10 bottom-0 h-fit text-gray-400 rounded-md hover:opacity-50"><i class="fa-solid fa-arrows-rotate"></i></button>
            </div>
            <div>
                <label for="email" class="block m-2 text-xl font-medium text-pink-600">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter a valid email"
                    class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64"
                    required>
            </div>
            <div>
                <label for="password" class="block m-2 text-xl font-medium text-pink-600">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    minlength="4"
                    maxlength="15"
                    placeholder="Create a password"
                    class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64"
                    required>
            </div>
            <div class="m-3">
                <div class="cf-turnstile" data-sitekey="0x4AAAAAAA7WFYd1UNGvHrcb" data-theme="light" data-size="flexible"></div>
            </div>
            <div class="flex justify-center items-center">
                <button
                    name="submit"
                    type="submit"
                    class="bg-pink-600 text-white py-3 px-6 rounded cursor-pointer transition-all duration-500 hover:scale-125">
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
