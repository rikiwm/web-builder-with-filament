<x-layouts.guest>
    <div class=" min-h-screen flex flex-col items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-2 md:px-3">
            <main class="mt-4 lg:mt-2 py-12">
                <x-section.section>
                    <x-slot name="content">
                        <livewire:home.home-component :hero="$hero" :welcome="$welcome" :berita="$berita" :team="$team" />                     
                    </x-slot>
                </x-section.section>

                <x-section.section>
                    <x-slot name="content">
                        <div class="py-4 lg:py-8 px-4 w-full max-w-screen-2xl mx-auto text-center ">
                            <div class="mb-4 -mt-2">
                                <div
                                    class="border border-zinc-200/50 dark:border-gray-700/40 dark:border-b-0 lg:mx-12  rounded-[16px] p-1 lg:p-4 md:p-8 mb-8">
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-2 ">
                                        <div
                                            class=" border border-gray-200 dark:border-zinc-800 rounded-xl p-4 md:p-6 bg-gradient-to-t to-zinc-200 dark:to-zinc-950 from-transparent text-medium text-gray-500 dark:text-gray-400 dark:bg-zinc-800/50 rounded-xl w-full ">
                                            <!-- ========== Start Agenda ========== -->
                                                {{-- <h2 class="text-xl text-sky-950 dark:text-white font-bold mb-2">
                                                        Agenda Kota Padang</h2>
                                                    <div class="flex items-center space-x-4 rtl:space-x-reverse mb-3">
                                                        <div class="flex items-center">
                                                            <svg class="w-5 h-5 text-zinc-500 me-2" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span
                                                                class="text-sky-950 dark:text-white text-base font-medium">30.06.2024</span>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <svg class="w-5 h-5 text-zinc-500 me-2" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span
                                                                class="text-sky-950 dark:text-white text-base font-medium">Padang,
                                                                Sumbar</span>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-start space-x-4 rtl:space-x-reverse mb-2 ">
                                                        <div class="flex items-center">
                                                            <svg class="w-5 h-5 text-zinc-500 me-2" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd"
                                                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span
                                                                class="text-sky-950 dark:text-white text-base font-medium">Cuaca
                                                                Hari ini,</span>
                                                        </div>
                                                        <span
                                                            class="text-sky-950 dark:text-white text-base font-medium">Hujan,
                                                        </span>
                                                    </div>
                        
                                                    <div class="relative max-w-screen">
                                                        <div class="inline-flex items-center justify-center w-full">
                                                            <hr
                                                                class="w-64 h-1 my-4 bg-gray-200 border-0 rounded-sm dark:bg-gray-700">
                                                            <div
                                                                class="absolute px-6 -translate-x-1/2 bg-white/50 left-1/2 dark:bg-gray-900">
                                                                Agenda
                                                            </div>
                                                        </div>
                                                        <ol
                                                            class="relative text-start border-s border-gray-200 dark:border-gray-700">
                                                            @for ($i = 0; $i < 3; $i++)
                                                            <li class="mb-10 ms-6">
                                                                <span
                                                                    class="absolute flex items-center justify-center w-6 h-6 bg-zinc-400 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-zinc-900">
                                                                    <svg class="w-2.5 h-2.5 text-sky-50 dark:text-zinc-300"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="currentColor" viewBox="0 0 20 20">
                                                                        <path
                                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                                    </svg>
                                                                </span>
                                                                <h3
                                                                    class="mb-1 text-lg font-semibold text-sky-950 dark:text-white">
                                                                    Rapat</h3>
                                                                <time
                                                                    class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released
                                                                    on December 2nd, 2021</time>
                                                                <p
                                                                    class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                                    Get started with
                                                                    dozens of web components and interactive elements
                                                                    built on top of Tailwind CSS.
                                                                </p>
                                                            </li>
                                                            @endfor
                                                        </ol>
                                                    </div> --}}
                                            <!-- ========== End Agenda ========== -->
                    
                                            <!-- ========== Start Section ========== -->
                                            <div class="group  flex max-w-md flex-col text-on-surface dark:text-on-surface-dark">
                                                <div>
                                                    <h2 class="text-sky-950 text-start dark:text-white text-xl font-semibold mb-2">
                                                        Populer</h2>
                                                    <hr class="w-full rounded-xl h-1 my-4 bg-gray-100 border-0 rounded-sm dark:bg-gray-700" />
                                                </div>
                                                <ul role="list" class="divide-y divide-gray-100">
                                                    @forelse ($berita as $b)
                                                  <x-list.partials.widget-list>
                                                    <x-slot name="content">
                                                        <a href="{{ route('post.detail', $b->slug) }}" target="_blank" rel="noopener noreferrer">
                                                        <div class="flex min-w-0 gap-x-4">
                                                                <img class="size-16 flex-none rounded-md object-cover"
                                                                    src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                                    alt="">
                                                                <p class="text-xs/5 text-gray-900 text-start line-clamp-3 dark:text-white">
                                                                {{ $b->title }}    
                                                                </p>
                                                            </div>
                                                        </a>
                                                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                                                
                                                                <p class="mt-1 text-xs/4 text-gray-500">View <time
                                                                    datetime="2023-01-23T13:23Z">44</time></p>
                                                                    <p class="mt-2 text-xs/4 text-gray-500">Last seen <time
                                                                        datetime="2023-01-23T13:23Z">3h ago</time></p>
                                                                    </div>
                                                                </x-slot>
                                                  </x-list.partials.widget-list>    
                                                    @empty
                                                        
                                                    @endforelse
                                               
                                                </ul>
                                            </div>
                    
                                            <!-- ========== End Section ========== -->
                    
                                        </div>
                    
                                        <div
                                            class="md:col-span-2  border border-gray-200 dark:border-zinc-800 rounded-2xl p-4 md:p-6 bg-gradient-to-t to-zinc-200 dark:to-zinc-950 from-transparent text-medium text-gray-500 dark:text-gray-400 dark:bg-zinc-800/50 rounded-xl w-full">
                                            <!-- ========== Start Berita ========== -->
                                        <livewire:list.swipper data="{{ $data ?? '' }}" />
                                            <!-- ========== End Berita ========== -->
                                        </div>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                  </x-slot>
                </x-section.section>

                <x-section.section>
                    <x-slot name="content">
                        <livewire:home.galleri  />
                   
                  </x-slot>
                </x-section.section>

                <x-section.section>
                    <x-slot name="content">
                        <livewire:home.team :team="$team" />
                    </x-slot>
                </x-section.section>

            </main>
        </div>
    </div>
    <!-- drawer init and toggle -->
    
    <x-modal-cari focusable name="test">
        <div class="p-4 w-full max-w-screen dark:bg-zinc-900">
            <h5 id="drawer-top-label"
                class="inline-flex items-center mb-4 text-base font-normal text-gray-500 dark:text-gray-400"><svg
                    class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>Search Informasi</h5>
            <button x-on:click="$dispatch('close')" type="button" data-drawer-hide="drawer-top-example"
                aria-controls="drawer-top-example"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-sky-950 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <form action="">
                <div class="block w-lg">
                    <input type="search"
                        class="text-center block w-full p-3 ps-10 text-sm text-sky-950 rounded-lg bg-white  focus:ring-zinc-500 focus:border-zinc-500 dark:bg-zinc-950/70 dark:placeholder-white dark:text-zinc-50 dark:focus:ring-zinc-100 ease-in-out dark:transition-colors"
                        name="search" placeholder="Search" aria-label="search" />
                </div>
            </form>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
        </div>

    </x-modal-cari>

</x-layouts.guest>
