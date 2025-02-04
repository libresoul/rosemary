<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= (isset($pageTitle)) ? "<title>$pageTitle</title>" : "<title>Rosemary</title>" ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if (preg_match('/^sign.*(\.php)?.*$/', basename($_SERVER['REQUEST_URI']))): ?>
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <?php endif; ?>
    <link rel="stylesheet" href="main.css">
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenu = document.getElementById('close-menu');
            const closeMobileMenu = () => {
                mobileMenu.classList.add('-translate-x-full');
            }

            menuToggle.addEventListener('click', (event) => {
                event.stopPropagation();
                mobileMenu.classList.remove('-translate-x-full');
            });

            closeMenu.addEventListener('click', (event) => {
                event.stopPropagation();
                closeMobileMenu();
            });

            document.body.addEventListener('click', (event) => {
                if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                    closeMobileMenu();
                }
            })

        })
    </script>
</head>

<?php
if (basename($_SERVER['REQUEST_URI']) == 'shopping.php') {
?>

    <body style="background-image: url(images/static/teal-bg.webp); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center;" class="bg-pink-50 text-gray-800 mb-2 text-md font-comfortaa mx-4">
    <?php
} else {
    ?>

        <body class="bg-pink-50 text-gray-800 mb-2 text-md font-comfortaa mx-4">
        <?php
    }
        ?>

        <!-- <nav
        class="sticky h-12  top-0 my-4 text-lg text-pink-600 flex content-center justify-between gap-6 bg-white border-pink-100 shadow-lg py-3 rounded-lg">
        <div class="xl:ml-64 lg:ml-32 md:ml-20">
            <a href="/" class="hover:bg-pink-200 px-4 py-2 rounded transition">Home</a>
            <a href="shopping.php" class="hover:bg-pink-200 px-4 py-2 rounded transition">Browse</a>
            <a href="checkout.php" class="hover:bg-pink-200 px-4 py-2 rounded transition">Payments</a>
            <a href="contact.php" class="hover:bg-pink-200 px-4 py-2 rounded transition">Contact</a>
        </div>
        <div class="xl:mr-64 lg:mr-32 md:mr-20">
            <a href="signin.php" class="hover:bg-pink-200 px-4 py-2 rounded transition">Sign In</a>
        </div>
    </nav> -->
        <nav class="sticky h-20 bg-teal-100 top-0 left-0 right-0 my-4 rounded-lg shadow-md w-full">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 rounded">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/static/logo.webp" class="h-10" alt="Logo">
                    <span class="self-center text-3xl font-semibold whitespace-nowrap">Rosemary</span>
                </a>

                <button id="menu-toggle" class="text-teal-500 md:hidden focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>

                <div class="hidden md:flex md:items-center md:w-auto" id="navbar-menu">
                    <ul class="flex flex-col md:flex-row md:space-x-8 font-medium gap-0">
                        <li><a href="/" class="block  text-gray-900 text-xl hover:bg-gray-100 md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">Home</a></li>
                        <li><a href="shopping.php" class="block  text-gray-900 text-xl hover:bg-gray-100 md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">Browse</a></li>
                        <li><a href="about.php" class="block  text-gray-900 text-xl hover:bg-gray-100 md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">About</a></li>
                        <li><a href="contact.php" class="block  text-gray-900 text-xl hover:bg-gray-100 md:hover:bg-transparent md:hover:scale-125 transition-all duration-500">Contact Us</a></li>
                    </ul>
                </div>
                <div class="hidden md:flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="signout.php"><button type="button" class="text-white bg-teal-500 hover:bg-teal-600 hover:scale-125 transition-all duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 text-center text-xl"><i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
                    <?php else: ?>
                        <a href="signup.php"><button type="button" class="text-white bg-teal-500 hover:bg-teal-600 hover:scale-125 transition-all duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-4 py-2 text-center text-xl">Start Your Journey !</button></a>
                    <?php endif; ?>
                </div>

            </div>
        </nav>

        <!-- Mobile Side Menu -->
        <div id="mobile-menu" class="fixed z-10 top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden">
            <button id="close-menu" class="absolute top-4 right-4 text-teal-500">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <ul class="mt-16 space-y-4 p-6 text-xl font-medium">
                <li><a href="/" class="block py-2 px-3 text-gray-900 hover:bg-gray-200">Home</a></li>
                <li><a href="shopping.php" class="block py-2 px-3 text-gray-900 hover:bg-gray-200">Browse</a></li>
                <li><a href="about.php" class="block py-2 px-3 text-gray-900 hover:bg-gray-200">About</a></li>
                <li><a href="contact.php" class="block py-2 px-3 text-gray-900 hover:bg-gray-200">Contact Us</a></li>
            </ul>
            <?php if (isset($_SESSION['username'])): ?>
            <?php else: ?>
                <a href="signup.php"><button type="button" class="text-white bg-teal-500 hover:bg-teal-600 hover:scale-105 transition-all duration-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg ml-5 px-1 py-2 text-center text-md">Start Your Journey !</button></a>
            <?php endif ?>
        </div>
