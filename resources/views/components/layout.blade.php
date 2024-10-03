<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEC Talent </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handjet:wght@100..900&display=swap" rel="stylesheet">

</head>


<body class="bg-black text-white pb-10" style="padding-bottom:150px;">




    <div class="px-10 sticky top-0">
        <nav class="flex justify-between items-center py-4 border-b border-white/20 bg-black shadow-lg"> 
            <div>
                <a href="/">
                    <img style="width: 10rem" src=" {{ Vite::asset('resources/images/raindance-logo-white.png') }} " alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="/" class="hover:text-red-500 transition-colors duration-300">Home</a>
                <a href="/#newpanel" class="hover:text-red-500 transition-colors duration-300">News</a>
                <a href="/help" class="hover:text-red-500 transition-colors duration-300">Help</a>
                <a href="/#search" class="hover:text-red-500 transition-colors duration-300">Search</a>
                <a href="/about" class="hover:text-red-500 transition-colors duration-300">About</a>
                <a href="https://raindance.ac.uk/contact-us/" target="_blank" class="hover:text-red-500 transition-colors duration-300">Contact</a>
            </div>

            @auth
            <div class="space-x-6 font-bold flex">

            <p class="mt-5 text-md"> Welcome! <p class="mt-5 text-md text-red-500"> {{ Auth::user()->name }} </p> </p>
                
                <a href="/jobs/create">

                   <x-btn-1> Make a Post!</x-btn-1>
                   
                </a>

                <form method="POST" action="/logout">

                    @csrf
                    @method('DELETE')

                    <button class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800  focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900 mt-5">
                     Log Out   
                    </button>

                </form>

            </div>
            @endauth


            @guest()

            <div class="space-x-6 font-bold">

            <a href="/register">
                <x-btn-1>
                    Sign Up
                </x-btn-1>
            </a>

            <a href="/login">
                <x-btn-2>
                    Log In
                </x-btn-2>
            </a>

            </div>

            @endguest

        </nav>  

        <main class="mt-10 max-w-[1200px] mx-auto">
            {{ $slot }}
        </main>

        <x-footer></x-footer>
    

    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif


</body>

</html>