<?php
$pageTitle = 'Sign In | Rosemary';
include_once 'includes/header.inc.php';
include_once 'includes/functions.inc.php';
?>
<div class="h-[--dont-overflow] md:mt-20 flex items-center justify-center rounded">
    <div class="p-10 transition-transform w-xl text-center rounded">
        <h1 class="text-pink-600 text-5xl font-bold">Pick Up<br>Where You<br>Left Off!</h1>
        <form action="signin_handler.php" method="POST" class="m-10">
            <?php handleSignErrors(); ?>
            <div>
                <label for="username" class="block m-2 text-xl font-medium text-pink-600">Username</label>
                <input
                    type="text"
                    id="first"
                    name="username"
                    minlength="4"
                    maxlength="20"
                    placeholder="Enter your username"
                    class="p-2 text-sm text-pink-600 bg-pink-100 border border-pink-400 rounded text-center w-64"
                    required>
            </div>
            <div>
                <label for="password" class="block m-2 text-xl font-medium text-pink-600">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    minlength="4"
                    maxlength="15"
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
                    class="bg-pink-600 text-white py-3 px-6 rounded-md cursor-pointer duration-500 hover:scale-125 transition-all">
                    Login
                </button>
            </div>
        </form>
        <div class="flex justify-center mt-5 text-sm">
            New Here?&nbsp;&nbsp;<a class="text-pink-600 hover:text-pink-400" href="signup.php">Sign Up</a>
        </div>
    </div>
</div>
</body>

</html>
