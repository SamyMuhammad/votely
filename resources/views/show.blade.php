<x-app-layout>
    {{-- <div> --}}
    <a href="/" class="flex items-center font-semibold hover:underline">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
        <span class="ml-2">All ideas</h4>
    </a>

    <div class="idea-container bg-white rounded-xl flex mt-4">
        <div class="flex flex-col md:flex-row flex-1 md:px-4 py-6">
            <div class="flex-none mx-2 md:mx-4">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar"
                        class="rounded-xl w-14 h-14">
                </a>
            </div>
            <div class="w-full mx-2 md:mx-4">
                <h4 class="text-xl font-semibld">
                    <a href="#" class="hover:underline">A rondom title goes here</a>
                </h4>
                <div class="text-gray-600 mt-2 line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</div>
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-4">
                    <div class="flex items-center space-x-2 md:justify-between text-xs font-semibold text-gray-400">
                        <span class="font-bold text-gray-900">John Doe</span>
                        <span>&bullet;</span>
                        <span>10 hours ago</span>
                        <span>&bullet;</span>
                        <span>Category</span>
                        <span>&bullet;</span>
                        <span class="text-gray-900">3 Comments</span>
                    </div>

                    <div x-data="{ isOpened: false }" class="flex items-center md:justify-between space-x-2 mt-4 md:mt-0">
                        <div
                            class="uppercase font-bold bg-gray-200 text-center text-xxs leading-none w-28 h-7 rounded-full py-2 px-4">
                            open</div>
                        <button type="button" @click="isOpened = !isOpened"
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

                    <div class="md:hidden flex items-center mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">12</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        <button
                            class="w-18 h-10 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-full hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-7">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end:card -->

    <div class="buttons-container flex items-center justify-between mt-5">
        <div class="flex items-center space-x-4 ml-6">
            <div x-data="{ isOpened: false }" class="relative">
                <button @click="isOpened = !isOpened" type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs text-center bg-blue-600
                    font-semibold rounded-xl text-white border border-blue-500 hover:border-blue-900
                    transition duration-150 ease-in px-6 py-3">
                    Reply
                </button>

                <div x-cloak x-show="isOpened" x-transition.origin.top.left.duration.500ms
                    @click.away="isOpened = false" @keydown.escape.window="isOpened = false"
                    class="absolute bg-white z-10 w-76 md:w-104 font-semibold text-left text-sm shadow-md shadow-gray-600 rounded-xl mt-2 px-5">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div>
                            <textarea name="post_comment" id="post_comment" cols="30" rows="4"
                                class="w-full border-none text-sm bg-gray-100 rounded-xl placeholder-gray-700 px-4 py-2"
                                placeholder="Go ahead, Don't be shy, Share your thoughts..."></textarea>
                        </div>

                        <div class="flex items-center space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs text-center bg-blue-600
                                    font-semibold rounded-xl text-white border border-blue-500 hover:border-blue-900
                                    transition duration-150 ease-in px-6 py-3">
                                Post Comment
                            </button>

                            <button type="button"
                                class="flex items-center justify-center w-32 h-11 text-xs bg-gray-200
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3">

                                <svg class="w-4 text-gray-600 -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div x-data="{ isOpened: false }" class="relative">
                <button @click="isOpened = !isOpened" type="button"
                    class="flex items-center justify-center w-36 h-11 text-xs bg-gray-200
                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                        transition duration-150 ease-in px-6 py-3">
                    <span class="ml-1">Set Status</span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div x-cloak x-show="isOpened" x-transition.origin.top.left.duration.500ms
                    @click.away="isOpened = false" @keydown.escape.window="isOpened = false"
                    class="absolute bg-white z-20 w-52 md:w-76 font-semibold text-left text-sm shadow-md shadow-gray-600 rounded-xl mt-2 px-5">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-black border-none"
                                        name="radio-direct" value="1">
                                    <span class="ml-2">Open</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-purple border-none"
                                        name="radio-direct" value="2">
                                    <span class="ml-2">Considering</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-yellow border-none"
                                        name="radio-direct" value="3">
                                    <span class="ml-2">In Progress</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-green border-none"
                                        name="radio-direct" value="4">
                                    <span class="ml-2">Implemented</span>
                                </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                    <input type="radio" checked="" class="bg-slate-200 text-red border-none"
                                        name="radio-direct" value="5">
                                    <span class="ml-2">Closed</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <textarea name="update_comment" id="update_comment" cols="30" rows="3"
                                class="w-full border-none text-sm bg-gray-100 rounded-xl placeholder-gray-700 px-4 py-2"
                                placeholder="Add an update comment (optional)"></textarea>
                        </div>

                        <div class="flex items-center justify-between space-x-3">
                            <button type="button"
                                class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                                font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                                transition duration-150 ease-in px-6 py-3">

                                <svg class="w-4 text-gray-600 -rotate-45" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                </svg>
                                <span class="ml-1">Attach</span>
                            </button>

                            <button type="submit"
                                class="flex items-center justify-center w-1/2 h-11 text-xs text-center bg-blue-600
                                font-semibold rounded-xl text-white border border-blue-500 hover:border-blue-900
                                transition duration-150 ease-in px-6 py-3">
                                <span class="ml-1">Update</span>
                            </button>
                        </div>

                        <div>
                            <label class="inline-flex items-center font-normal">
                                <input type="checkbox" name="notify_voters" id="notify_voters" checked
                                    class="rounded bg-gray-200">
                                <span class="ml-2">Notify all voters</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-3">
            <div class="bg-white text-center font-semibold rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-xs text-gray-400 leading-none">Votes</div>
            </div>

            <button type="button"
                class="w-32 h-11 text-xs bg-gray-200
                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400
                    transition duration-150 ease-in px-6 py-3">
                <span class="ml-1 uppercase">Vote</span>
            </button>
        </div>
    </div> <!-- end:buttons-container -->

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
