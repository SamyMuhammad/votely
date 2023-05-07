<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/4">
            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
                <option value="4">option 4</option>
            </select>
        </div>
        <div class="w-1/4">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
                <option value="4">option 4</option>
            </select>
        </div>
        <div class="w-2/4 relative">
            <input type="search" name="" id="" placeholder="Find an idea.." class="w-full rounded-xl border-none placeholder-gray-700 px-4 py-2 pl-8">
            <div class="absolute top-0 h-full flex items-center ml-2">
                <svg class="text-gray-500 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>                  
            </div>
        </div>
    </div> <!-- end:filters -->

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r boreder-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-5">
                    <button class="w-full font-bold text-xxs bg-gray-200 border-2 border-gray-200 hover:border-gray-400 transition duration-150 ease-in
                     rounded-xl px-4 py-3 uppercase">vote</button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="rounded-xl w-14 h-14">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibld">
                        <a href="#" class="hover:underline">A rondom title goes here</a>
                    </h4>
                    <div class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, sed natus. Illum modi eligendi voluptatibus officia unde provident. Earum, voluptatem cumque, voluptate neque, aut provident dolores necessitatibus fugiat pariatur nisi consequatur rerum voluptatum. Maiores quasi tempore dignissimos. Animi consectetur, obcaecati in explicabo recusandae ut pariatur deserunt voluptas similique nam minus odit, facilis, assumenda voluptatibus laboriosam a maiores non vero itaque voluptatum. Exercitationem voluptatem consequatur est ratione architecto in repellat dignissimos, ut vitae temporibus incidunt enim autem debitis asperiores maiores qui dolorem laudantium fuga nisi atque, mollitia suscipit perspiciatis ipsa provident. Aliquid provident similique laudantium odit dolorem et libero sunt sequi!</div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center justify-between space-x-2 text-xs font-semibold text-gray-400">
                            <span>10 hours ago</span>
                            <span>&bullet;</span>
                            <span>Category</span>
                            <span>&bullet;</span>
                            <span class="text-gray-900">3 Comments</span>
                        </div>

                        <div class="flex items-center justify-between space-x-2">
                            <div class="uppercase font-bold bg-gray-200 text-center text-xxs leading-none w-28 h-7 rounded-full py-2 px-4">open</div>
                            <button type="button" class="font-bold bg-gray-100 hover:bg-gray-200 transition duration-150 ease-in text-center text-sm leading-none h-7 rounded-full py-2 px-4">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)">
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end ideas container -->
</x-app-layout>
