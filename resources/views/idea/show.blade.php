<x-app-layout>
    {{-- <div> --}}
    <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span class="ml-2">All ideas</h4>
    </a>

    <livewire:idea-show :idea="$idea"/>

    <div class="comments-container relative space-y-6 md:ml-20 pt-4 mt-1 my-8">
        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar"
                            class="rounded-xl w-14 h-14">
                    </a>
                </div>
                <div class="w-full md:mx-4">
                    <div class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center justify-between space-x-2 text-xs font-semibold text-gray-400">
                            <span class="font-bold text-gray-900">John Doe</span>
                            <span>&bullet;</span>
                            <span>10 hours ago</span>
                        </div>

                        <div x-data="{ isOpened: false }" class="flex items-center justify-between space-x-2">
                            <button type="button" @click="isOpened = !isOpened"
                                class="relative font-bold bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in text-center text-sm leading-none h-7 rounded-full border py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <!-- menu -->
                                <ul x-cloak x-show="isOpened" x-transition.origin.top.right.duration.500ms
                                    @click.away="isOpened = false" @keydown.escape.window="isOpened = false"
                                    class="absolute z-10 w-44 text-left bg-white font-semibold py-3 rounded-xl shadow-lg md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end: comment-container -->

        <div class="comment-container is-admin relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar"
                            class="rounded-xl w-14 h-14">
                    </a>
                    <div class="text-center uppercase text-xxs font-bold text-blue-500 mt-1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibld">
                        <a href="#" class="hover:underline">Status Changed to "under consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center justify-between space-x-2 text-xs font-semibold text-gray-400">
                            <span class="font-bold text-blue-500">Andrea</span>
                            <span>&bullet;</span>
                            <span>10 hours ago</span>
                        </div>

                        <div x-data="{ isOpened: false }" class="flex items-center justify-between space-x-2">
                            <button @click="isOpened = !isOpened" type="button"
                                class="relative font-bold bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in text-center text-sm leading-none h-7 rounded-full border py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <!-- menu -->
                                <ul x-cloak x-show="isOpened" x-transition.origin.top.right.duration.500ms
                                    @click.away="isOpened = false" @keydown.escape.window="isOpened = false"
                                    class="absolute z-10 w-44 text-left bg-white font-semibold py-3 rounded-xl shadow-lg md:ml-8 top-8 md:top-6 right-0 md:left-0">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end: comment-container -->

        <div class="comment-container relative bg-white rounded-xl flex mt-4">
            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar"
                            class="rounded-xl w-14 h-14">
                    </a>
                </div>
                <div class="w-full mx-4">
                    <div class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit.</div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center justify-between space-x-2 text-xs font-semibold text-gray-400">
                            <span class="font-bold text-gray-900">John Doe</span>
                            <span>&bullet;</span>
                            <span>10 hours ago</span>
                        </div>

                        <div x-data="{ isOpened: false }" class="flex items-center justify-between space-x-2">
                            <button @click="isOpened = !isOpened" type="button"
                                class="relative font-bold bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in text-center text-sm leading-none h-7 rounded-full border py-2 px-4">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                                <!-- menu -->
                                <ul x-cloak x-show="isOpened" x-transition.origin.top.left.duration.500ms
                                    @click.away="isOpened = false" @keydown.escape.window="isOpened = false"
                                    class="absolute z-10 w-44 text-left bg-white font-semibold py-3 rounded-xl shadow-lg ml-8">
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark
                                            as Spam</a></li>
                                    <li><a href="#"
                                            class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete
                                            Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end: comment-container -->
    </div> <!-- end: comments-container -->
    {{-- </div> --}}
</x-app-layout>
