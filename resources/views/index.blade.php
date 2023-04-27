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
</x-app-layout>
