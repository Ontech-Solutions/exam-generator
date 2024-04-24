<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exam Generator</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
    </head>
    <body class="font-sans">
        <section>
            <header class="text-gray-600 body-font">
                <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <img src="{{ asset('imgs/logo.png') }}" class="h-10">
                    </a>
                    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
                        <a class="mr-5 hover:text-gray-900">FAQ</a>
                        <a class="mr-5 hover:text-gray-900">User Manual</a>
                    </nav>
                    <a href="/admin" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Log in</a>
                </div>
            </header>

        </section>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to Exam Auto
                        <br class="hidden lg:inline-block">Question Generator
                    </h1>
                    <p class="mb-8 leading-relaxed">Are you tired of spending countless hours crafting exam questions? Say goodbye to manual question generation and hello to the future of assessment creation with Exam Auto Question Generator. Our cutting-edge platform utilizes advanced algorithms and natural language processing to generate high-quality exam questions in minutes, saving you time and effort while ensuring the integrity and validity of your assessments.</p>
                    <div class="flex justify-center">
                        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('imgs/writing.png') }}">
                </div>
            </div>
        </section>
    </body>
</html>
