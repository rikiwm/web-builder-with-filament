<x-layouts.guest>
    <div class=" min-h-screen flex items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-2 md:px-3">
            <main class="mt-4 lg:mt-2 py-12">
                <x-section.section>
                    <div>
                        <livewire:home.home-component :hero="$hero" :welcome="$welcome" />
                    </div>
                </x-section.section>

                <x-section.section>
                        <div class="py-4 lg:py-8 px-4 w-full max-w-screen-2xl mx-auto text-center ">
                            <div class="mb-4 -mt-2">
                                <div
                                    class="border border-zinc-200/50 dark:border-gray-700/40 dark:border-b-0 lg:mx-12  rounded-[16px] p-1 lg:p-4 md:p-8 mb-8">
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-2 ">
                                        <div
                                            class=" border border-gray-200 dark:border-zinc-800 rounded-xl p-4 md:p-6 
                                            bg-gradient-to-t to-zinc-200 
                                            dark:to-zinc-950 from-transparent text-medium text-gray-500 dark:text-gray-400 dark:bg-zinc-800/50 rounded-xl w-full ">
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
                                            <div class="group rounded-xl flex max-w-md flex-col text-on-surface dark:text-on-surface-dark">
                                                <div class="flex flex-auto space-x-4">
                                                    <img src="https://diskominfo.majalengkakab.go.id/wp-content/uploads/2017/05/cropped-logo-diskominfo.png" class="size-8 flex-none rounded-md object-cover" alt="">
                                           
                                                    <h2 class=" text-start text-xl font-semibold mb-2">
                                                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-blue-800 from-sky-400">
                                                            GPR KOMDIGI
                                                        </span>
                                                    </h2>
                                                </div>
                                                    <hr class="w-full rounded-xl h-1 my-4 bg-white border-0 rounded-sm dark:bg-gray-700" />
                                                <div id="gpr-kominfo-widget-container" class="rounded-xl opacity-90 h-full" style="border-radius: 12px !important;"></div>
                                                {{-- <ul role="list" class="divide-y divide-gray-100">
                                                    @forelse ($berita as $b)
                                                        <x-list.partials.widget-list>
                                                            <x-slot name="content">
                                                                <a href="{{ route('post.detail', $b->slug) }}"
                                                                    target="_blank" rel="noopener noreferrer">
                                                                    <div class="flex min-w-0 gap-x-4">
                                                                        <img class="size-16 flex-none rounded-md object-cover"
                                                                            src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                                            alt="">
                                                                        <p
                                                                            class="text-xs/5 text-gray-900 text-start line-clamp-3 dark:text-white">
                                                                            {{ $b->title }}
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                                <div
                                                                    class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">

                                                                    <p class="mt-1 text-xs/4 text-gray-500">View <time
                                                                            datetime="2023-01-23T13:23Z">44</time></p>
                                                                    <p class="mt-2 text-xs/4 text-gray-500">Last seen
                                                                        <time datetime="2023-01-23T13:23Z">3h ago</time>
                                                                    </p>
                                                                </div>
                                                            </x-slot>
                                                        </x-list.partials.widget-list>
                                                    @empty
                                                    @endforelse

                                                </ul> --}}
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
                </x-section.section>

                <x-section.section>
                    <livewire:home.galleri />
                </x-section.section>

                <x-section.section>
                    <livewire:home.team :team="$team" />
                </x-section.section>

                <x-section.section>
                    <div class="py-2 mx-auto max-w-screen-sm lg:py-4 sm:mt-8">
                        <h1
                            class="mb-2 text-5xl font-semibold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-400 from-gray-500">
                                Contact Us
                            </span>
                        </h1>
                        <p
                            class="mb-4 text-sm font-base text-black dark:text-zinc-50/50 md:text-lg lg:text-lg text-center">
                            Contact us for any inquiries or feedback.
                        </p>
                        <hr />
                    </div>
                    <div
                        class="flex flex-col items-center mx-auto max-w-screen-xl bg-white dark:bg-zinc-800/50 dark:border-zinc-700 border border-gray-200 rounded-lg shadow-sm md:flex-row">

                        <iframe width="450" height="250" class="ms-2 object-cover w-full rounded-lg" frameborder="0"
                            style="border:0" referrerpolicy="no-referrer-when-downgrade"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510670.01510619104!2d100.12324738302435!3d-0.5862145967498221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b9d756a7e211%3A0xbfeb517a803247ed!2sBalai%20Kota%20Padang%20Lama!5e0!3m2!1sid!2sid!4v1725754201803!5m2!1sid!2sid&maptype=satellite"
                            allowfullscreen>
                        </iframe>
                        <div class="flex flex-col p-4 leading-normal space-y-3">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                Location</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                    in reverse chronological order.
                            </p>
                                <a href="#" class="w-full sm:w-auto bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                                    <div class="text-left rtl:text-right">
                                        <div class="mb-1 text-xs">Alamat</div>
                                        <div class="-mt-1 font-sans text-sm font-semibold">Jl. Padang Lama, Padang Lama, Kota Padang, Sumatera Barat</div>
                                    </div>
                                </a>
                                <a href="#" class="w-full sm:w-auto bg-gray-400 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                                    <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>
                                    <div class="text-left rtl:text-right">
                                        <div class="mb-1 text-xs">Phone</div>
                                        <div class="-mt-1 font-sans text-sm font-semibold">Jl. Padang Lama, Padang Lama, Kota Padang, Sumatera Barat</div>
                                    </div>
                                </a>
                        </div>
                        {{-- <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <img src="{{ asset('images/undraw_community.svg') }}" alt="Community" class="w-24 h-24 mb-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Join Our Community</h3>
                            <p class="text-gray-500 dark:text-gray-400">Connect with like-minded individuals.</p>
                        </div>
                        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                            <h2 class="mb-4 text-4xl tracking-tight font-semibold text-center text-gray-900 dark:text-white">Contact Us</h2>
                            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
                            <form action="#" class="space-y-8">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                    <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                                </div>
                                <div>
                                    <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                    <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                                </div>
                                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                            </form>
                        </div> --}}

                    </div>
                </x-section.section>

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
