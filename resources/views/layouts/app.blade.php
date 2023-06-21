<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans bg-gray-background text-gray-900 text-sm">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="#">
            <img src="{{ asset('assets/images/logoipsum-241.svg') }}" alt="votely-logo" />
        </a>

        <div class="flex mt-2 md:mt-0 items-center">
            @if (Route::has('login'))
                <div class="p-6 text-right">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"
                    class="h-10 w-10 rounded-full" />
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex flex-col md:flex-row">
        <div class="w-[280px] mx-auto md:mx-0 md:mr-5">
            <div class="md:sticky md:top-5 border-2 border-blue rounded-xl mt-16 bg-white">
                <div class="text-center pt-5 py-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    @auth
                        <p class="text-xs mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, pariatur!
                        </p>
                    @else
                        <p class="text-xs mt-4">Please, Login to be able to add Ideas.</p>
                    @endauth
                </div>

                @auth
                    <livewire:create-idea />
                @else
                    <div class="my-6 text-center">
                        <a href="{{ route('login') }}"
                            class="inline-block w-1/2 h-11 text-xs text-center bg-blue-600
                                    font-semibold rounded-xl text-white border border-blue-500 hover:border-blue-900
                                    transition duration-150 ease-in px-6 py-3 mb-3">
                            Login
                        </a>

                        <a href="{{ route('register') }}"
                            class="inline-block w-1/2 h-11 text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                            transition duration-150 ease-in px-6 py-3">
                            Sign Up
                        </a>
                    </div>
                @endauth
            </div>
        </div> <!-- end: side form -->

        <div class="w-full md:w-[700px] px-2 md:px-0">
            <nav class="hidden md:flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 rounded-sm">
                    <li><a href="#" class="border-b-4 pb-3 border-custom-blue rounded-sm">All Ideas (55)</a></li>
                    <li><a href="#"
                            class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Considering
                            (6)</a></li>
                    <li><a href="#"
                            class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">In
                            Progress (1)</a></li>
                </ul>

                <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 rounded-sm">
                    <li><a href="#"
                            class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Implemented
                            (6)</a></li>
                    <li><a href="#"
                            class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Closed
                            (3)</a></li>
                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
    @livewireScripts
</body>

</html>
