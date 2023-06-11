<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/4">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
                <option value="4">option 4</option>
            </select>
        </div>
        <div class="w-full md:w-1/4">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
                <option value="4">option 4</option>
            </select>
        </div>
        <div class="w-full md:w-2/4 relative">
            <input type="search" name="" id="" placeholder="Find an idea.."
                class="w-full rounded-xl border-none placeholder-gray-700 px-4 py-2 pl-8">
            <div class="absolute top-0 h-full flex items-center ml-2">
                <svg class="text-gray-500 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </div>
        </div>
    </div> <!-- end:filters -->

    <div class="ideas-container space-y-6 my-6">
        @foreach ($ideas as $idea)
            <div 
                x-data
                @click="const target = $event.target.tagName.toLowerCase()
                    if (!['a', 'button', 'svg', 'path'].includes(target)) {
                        $refs.link.click()
                    }
                "
                class="idea-container hover:shadow-md transition duration-150 ease-in cursor-pointer bg-white rounded-xl flex">
                <div class="hidden md:block border-r boreder-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                    <div class="mt-5">
                        <button
                            class="w-full font-bold text-xxs bg-gray-200 border-2 border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                     rounded-xl px-4 py-3 uppercase">vote</button>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                    <div class="flex-none mx-4 md:mx-0">
                        <a href="#">
                            <img src="{{ $idea->user->getAvatar() }}" alt="avatar"
                                class="rounded-xl w-14 h-14">
                        </a>
                    </div>
                    <div class="w-full flex flex-col justify-between mx-4">
                        <h4 class="text-xl font-semibld mt-2 md:mt-0">
                            <a x-ref="link" href="{{ route('idea.show', $idea) }}" class="idea-anchor hover:underline">{{ $idea->title }}</a>
                        </h4>
                        <div class="text-gray-600 mt-2 line-clamp-3">{{ $idea->description }}</div>
                        <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                            <div
                                class="flex items-center md:justify-between space-x-2 text-xs font-semibold text-gray-400">
                                <span>{{ $idea->created_at?->diffForHumans() }}</span>
                                <span>&bullet;</span>
                                <span>{{ $idea->category->name }}</span>
                                <span>&bullet;</span>
                                <span class="text-gray-900">3 Comments</span>
                            </div>

                            <div x-data="{ isOpened: false }"
                                class="flex items-center md:justify-between space-x-2 mt-4 md:mt-0">
                                <div class="{{ $idea->status->classes }} uppercase font-bold text-center text-xxs leading-none w-28 h-7 rounded-full py-2 px-4">
                                    {{ $idea->status->name }}
                                </div>
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
                                        class="absolute w-44 text-left bg-white font-semibold py-3 rounded-xl shadow-lg ml-8">
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
        @endforeach
    </div><!-- end ideas container -->

    <div class="my-8">
        {!! $ideas->render() !!}
    </div>
</x-app-layout>
