<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computer Science Books</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900 font-sans">

<nav class="bg-gray-900 text-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Logo / Title -->
            <h1 class="text-xl sm:text-2xl font-bold">
                <a href="/" class="hover:text-gray-300">Books App</a>
            </h1>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="/" class="hover:text-gray-300 transition-colors">Home</a>
                <a href="/books" class="hover:text-gray-300 transition-colors">Books</a>
                <a href="/authors" class="hover:text-gray-300 transition-colors">Authors</a>
                <a href="/publishers" class="hover:text-gray-300 transition-colors">Publishers</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pt-2 pb-4 space-y-1 bg-gray-800">
        <a href="/" class="block py-2 px-2 rounded hover:bg-gray-700 transition">Home</a>
        <a href="/books" class="block py-2 px-2 rounded hover:bg-gray-700 transition">Books</a>
        <a href="/authors" class="block py-2 px-2 rounded hover:bg-gray-700 transition">Authors</a>
        <a href="/publishers" class="block py-2 px-2 rounded hover:bg-gray-700 transition">Publishers</a>
    </div>
</nav>

<script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>