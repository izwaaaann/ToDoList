<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Roboto Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    
    
</head>
<style>
        body {
            background-image: url('/images/wallpaper4.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Roboto', sans-serif;
           
        }
</style>
@include('layouts.navigation')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<body class="font-roboto dark:text-white/50">
    <div class="min-h-screen bg-transparent">
      

        <!-- Page Content -->
        <main class="bg-transparent pl-10 pt-10">     
            <div class="grid gap-6 gap lg:grid-cols-2">
                <a id="docs-card" class="rounded-lg p-6 ring-1 ring-white/[0.05] transition duration-300 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                        <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col ">
                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-xl font-bold text-black dark:text-white">Welcome to To-Do List !</h2>
                                <p class="mt-4 "style="text-align: justify;">Our website can allow you to embark on an adventure with our dynamic "To-Do List" feature! Dive into the realm of task management, where you can wield the power to create, update, delete, and view your tasks at will. Behold the majestic table adorned with columns for Title, Description, Status, Start Date, and End Date, eagerly awaiting your input. With every detail meticulously filled out and submitted through our user-friendly form, you'll witness your tasks spring to life. But fear not, for should the need arise, the mighty Edit and Delete buttons stand ready to aid you on your quest for productivity!</p>    
                            </div>            
                        </div>
                        <div class="flex justify-end items-end pt-4 pr-4">
                            <img src="{{ asset('images/icon.png') }}" alt="Image1" style="max-width: 130px; height: auto;"> 
                        </div>
                </a> 
            </div> 
        </main>
    </div>
</body>
</html>
