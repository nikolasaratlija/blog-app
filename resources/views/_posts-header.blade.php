<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest News About <span class="text-blue-500">Whatever</span>
    </h1>

    <h2 class="inline-flex mt-2">Nikola Saratlija</h2>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">

            <x-dropdown>

                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left inline-flex">
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Category' }}

                        <x-down-arrow class="absolute pointer-events-none"/>
                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

                @foreach ($categories as $category)
                    <x-dropdown-item href="/categories/{{ $category->slug }}" :active='request()->is("categories/{$category->slug}")'>
                        {{ ucwords($category->name) }}
                    </x-dropdown-item>
                @endforeach

            </x-dropdown>

        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
