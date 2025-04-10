@props(['data' => '', 'content' => ''])
<nav  x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false"
    class="transition delay-100 duration-300 ease-in-out hover:bg-white/70  dark:hover:bg-black fixed z-30 w-full rounded-b-lg bg-gray-100/20 backdrop-blur-md border-b border-white/60 dark:bg-black/50 dark:border-gray-900 py-2 px-5">
    <div class="px-0 flex flex-wrap items-center justify-between mx-auto max-w-screen-xl w-full">
        <x-inc.header-logo />
        <div class="flex items-center md:order-2 md:space-x-0 rtl:space-x-reverse">
            <button id="theme-toggle" class="px-4 py-2 ">
                <svg class="w-6 h-6 text-sky-950 dark:text-zinc-400" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                </svg>
            </button>
            @auth
                <a href="app" wire:navigate
                    class="flex text-sm bg-transparent rounded md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:hover:ring-1 dark:hover:ring-sky-900 dark:hover:bg-transparent dark:hover:text-green-800">
                    <svg class="text-green-800 w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                        <circle cx="12" cy="7" r="4" />
                    </svg>
                </a>
            @else
                {{-- <a href="app/login"
                    class="flex text-sm bg-transparent rounded md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:hover:ring-1 dark:hover:ring-green-900 dark:hover:bg-transparent dark:hover:text-green-800"">
                    <svg class="w-6 h-6 text-green-800" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M7 12h14l-3 -3m0 6l3 -3" />
                    </svg>

                </a>
                <span
                    class="border border-l-0 rounded-md border-green-800/70 text-green-800 dark:text-green-400 dark:border-green-900/60 px-2">
                    Masuk
                </span> --}}
            @endauth
            {{-- <button id="menu-btn" class="md:hidden text-lg dark:text-white focus:outline-none">☰</button> --}}
            <button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" x-bind:aria-expanded="mobileMenuIsOpen" 
            x-bind:class="mobileMenuIsOpen ? 'fixed top-4 right-4 z-20' : null" type="button" 
            class="flex text-on-surface dark:text-on-surface-dark md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
                <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 dark:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                class="size-6 ms-auto dark:text-white"> ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            
    
        </div>

        <ul x-cloak x-show="mobileMenuIsOpen" 
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" 
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" 
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" 
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
         class="bg-white dark:bg-black mx-auto space-y-4 fixed max-h-svh overflow-y-auto inset-x-2 top-0 z-10 flex flex-col 
         rounded-b-xl border-b border-outline bg-surface-alt px-6 pb-6 pt-20
          dark:bg-surface-dark-alt md:hidden" >
            @foreach ($data as $item)
            <li class=" group">
                @php
                    $place = $item->children;
                @endphp

                <div x-data="{ open: false }">
                    <a  @if ($item->type == 'place' && $place->isNotEmpty()) x-on:click="open = ! open" @else href="{{ $item->slug }}" @endif class="hover:text-gray-500 dark:text-gray-100">{{ $item->name }}</a>
                    <div x-show="open"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90">
                        <div class="ms-4 bg-white/80 dark:bg-transparent dark:backdrop-blur-md rounded-md py-2">
                            @forelse ($item->children as $c)
                            <a href="{{ $c->slug }}" wire:navigate class="block p-2 mx-auto rounded-lg hover:bg-gray-50 dark:hover:bg-green-950/20">
                                <span class="text-md text-black/90 font-normal dark:text-gray-400">{{ $c->name }}</span>
                            </a>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>

            </li>

            @endforeach
        </ul>
        <x-inc.header-nav>
            <x-slot name="navbar">
                <x-inc.header-nav-li>
                    <x-slot name="navli">
                        @foreach ($data as $item)
                            <x-inc.header-nav-li-a :navtitle="$item->name" :child="$item" :rute="$item->slug">
                            </x-inc.header-nav-li-a>
                        @endforeach
                    </x-slot>
                </x-inc.header-nav-li>
            </x-slot>
        </x-inc.header-nav>


 


        {{-- <div id="mobile-menu"
            class="absolute z-40 inset-0  bg-white dark:bg-black -translate-y-96 md:hidden  items-center justify-items-start text-xl ">
            <div class="flex flex-row justify-between mx-auto  py-2">
                <span class="text-3xl font-extrabold text-black dark:text-white mx-4">{{ config('app.name', 'Laravel') }}</span>
                <button id="close-btn" class=" text-xl text-black dark:text-white float-end mx-4 me-4">&times;</button>
            </div>
            <div class=" bg-white dark:bg-black mx-auto py-4 mb-4 px-4 rounded-b-3xl">
                <ul class="space-y-3 ">
                    @foreach ($data as $item)
                    <li class=" group">
                        @php
                            $place = $item->children;
                        @endphp

                        <div x-data="{ open: false }">
                            <a  @if ($item->type == 'place' && $place->isNotEmpty()) x-on:click="open = ! open" @else href="{{ $item->slug }}" @endif class="hover:text-gray-500 dark:text-gray-100">{{ $item->name }}</a>
                            <div x-show="open"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90">
                                <div class="ms-4 bg-white/80 dark:bg-transparent dark:backdrop-blur-md rounded-md py-2">
                                    @forelse ($item->children as $c)
                                    <a href="{{ $c->slug }}" wire:navigate class="block p-2 mx-auto rounded-lg hover:bg-gray-50 dark:hover:bg-green-950/20">
                                        <span class="text-md text-black/90 font-normal dark:text-gray-400">{{ $c->name }}</span>
                                    </a>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                    </li>

                    @endforeach
                </ul>

            </div>
        </div> --}}
</nav>

{{-- <nav x-data="{ mobileMenuIsOpen: false }" x-on:click.away="mobileMenuIsOpen = false" 
class="flex items-center justify-between border-b border-outline px-6 py-4 dark:border-outline-dark" aria-label="penguin ui menu">
	<!-- Brand Logo -->
	<a href="#" class="text-2xl font-bold text-on-surface-strong dark:text-on-surface-dark-strong">
		<span>Peng<span class="text-primary dark:text-primary-dark">ui</span>n</span>
		<!-- <img src="./your-logo.svg" alt="brand logo" class="w-10" /> -->
	</a>
	<!-- Desktop Menu -->
	<ul class="hidden items-center gap-4 md:flex">
		<li><a href="#" class="font-bold text-primary underline-offset-2 hover:text-primary focus:outline-hidden focus:underline dark:text-primary-dark dark:hover:text-primary-dark" aria-current="page">Products</a></li>
		<li><a href="#" class="font-medium text-on-surface underline-offset-2 hover:text-primary focus:outline-hidden focus:underline dark:text-on-surface-dark dark:hover:text-primary-dark">Pricing</a></li>
		<li><a href="#" class="font-medium text-on-surface underline-offset-2 hover:text-primary focus:outline-hidden focus:underline dark:text-on-surface-dark dark:hover:text-primary-dark">Blog</a></li>
		<li><a href="#" class="font-medium text-on-surface underline-offset-2 hover:text-primary focus:outline-hidden focus:underline dark:text-on-surface-dark dark:hover:text-primary-dark">Login</a></li>
	</ul>
	<!-- Mobile Menu Button -->
	<button x-on:click="mobileMenuIsOpen = !mobileMenuIsOpen" x-bind:aria-expanded="mobileMenuIsOpen" x-bind:class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button" class="flex text-on-surface dark:text-on-surface-dark md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
		<svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
		</svg>
		<svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
			<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
		</svg>
	</button>
	<!-- Mobile Menu -->
	<ul x-cloak x-show="mobileMenuIsOpen" x-transition:enter="transition motion-reduce:transition-none ease-out duration-300" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition motion-reduce:transition-none ease-out duration-300" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu" class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-outline rounded-b-radius border-b border-outline bg-surface-alt px-6 pb-6 pt-20 dark:divide-outline-dark dark:border-outline-dark dark:bg-surface-dark-alt md:hidden">
		<li class="py-4"><a href="#" class="w-full text-lg font-bold text-primary focus:underline dark:text-primary-dark" aria-current="page">Products</a></li>
		<li class="py-4"><a href="#" class="w-full text-lg font-medium text-on-surface focus:underline dark:text-on-surface-dark">Pricing</a></li>
		<li class="py-4"><a href="#" class="w-full text-lg font-medium text-on-surface focus:underline dark:text-on-surface-dark">Blog</a></li>
		<li class="py-4"><a href="#" class="w-full text-lg font-medium text-on-surface focus:underline dark:text-on-surface-dark">Login</a></li>
	</ul>
</nav> --}}
