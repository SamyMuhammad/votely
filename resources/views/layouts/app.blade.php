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
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">
                <img src="{{ asset('assets/images/logoipsum-241.svg') }}" alt="votely-logo" />
            </a>
            
            <div class="flex items-center">
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
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                <a href="#">
                    <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" 
                    alt="avatar" class="h-10 w-10 rounded-full"/>
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-thousandPixel flex">
            <div class="w-[280px] mr-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minus quod eligendi culpa illum corrupti eaque, non porro iusto, rem quae nostrum ipsam quis explicabo harum officiis obcaecati eveniet iure voluptatibus vitae. Sapiente ratione cumque modi, rerum sed, officiis quasi delectus maxime, laborum sequi ex veritatis nulla suscipit maiores amet? Enim voluptate eum libero laudantium iure hic culpa ab iste minima molestias deleniti adipisci provident beatae, placeat cum expedita. Voluptas ut laudantium earum nobis, eum fugiat labore a amet! Tenetur omnis, alias, error sunt unde accusantium veniam dolor suscipit earum quasi similique, eligendi exercitationem accusamus corporis ratione sequi temporibus voluptate.</div>
            <div class="w-[700px]">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 rounded-sm">
                        <li><a href="#" class="border-b-4 pb-3 border-custom-blue rounded-sm">All Ideas (55)</a></li>
                        <li><a href="#" class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Considering (6)</a></li>
                        <li><a href="#" class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">In Progress (1)</a></li>
                    </ul>

                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3 rounded-sm">
                        <li><a href="#" class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Implemented (6)</a></li>
                        <li><a href="#" class="text-gray-400 border-b-4 pb-3 rounded-sm hover:border-custom-blue transition duration-150 ease-in">Closed (3)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </body>
</html>
