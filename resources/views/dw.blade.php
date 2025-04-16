<x-layouts.guest>
    <div class=" min-h-screen flex items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-2 md:px-3">
            <main class="mt-4 lg:mt-2 py-12">
      {{-- @dd($type) --}}
   
            </main>
        </div>
    </div>
    <!-- drawer init and toggle -->

    {{-- <x-modal-cari focusable name="test">
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
                    <livewire:search-content/>

                </div>
            </form>
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            </a>
        </div>

    </x-modal-cari> --}}

</x-layouts.guest>
