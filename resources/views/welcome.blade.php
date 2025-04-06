<x-layouts.guest>

    <div class=" min-h-screen flex flex-col items-center justify-center selection:bg-[#03A56A] selection:text-white">
        <div class="relative w-full px-2 md:px-4">
            <main class="mt-4 lg:mt-2 py-12">
                <x-home.section>
                    <x-slot name="content">
                        <livewire:home.home-component :hero="$hero" />
{{-- @dd($welcome) --}}
                        <div class="py-4 px-4 w-full max-w-screen-xl mx-auto text-center -mt-12">
                            <div class="lg:pb-20">
                                <div class="mx-auto max-w-7xl py-2   ">
                                    <div
                                        class="relative isolate overflow-hidden bg-gradient-to-t dark:bg-gradient-to-b to-zinc-200 dark:to-zinc-950 from-transparent dark:from-zinc-400/40 px-6 pt-12 pb-12 lg:pb-0 shadow-md rounded-xl sm:px-16 py-12 md:pt-0 lg:flex lg:gap-x-12 lg:px-12 lg:pt-4 justify-between items-top">
                                        <svg viewBox="0 0 1024 1024"
                                            class="absolute top-1/2 left-1/2 -z-10 size-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                                            aria-hidden="true">
                                            <circle cx="512" cy="512" r="512"
                                                fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                                            <defs>
                                                <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                                    <stop stop-color="white" />
                                                    <stop offset="1" stop-color="black" />
                                                </radialGradient>
                                            </defs>
                                        </svg>
                                        <div
                                            class="mx-auto max-w-screen-2xl w-full text-center lg:mx-0 lg:flex-auto lg:py-10 lg:text-left">
                                            <h2
                                                class="text-xl font-semibold tracking-tight text-zinc-900 text-balance dark:text-white sm:text-4xl">
                                                {{  $welcome['value'][0]['data']['content'] ?? 'content' }} 
                                              </h2>
                                            <p class="mt-6 text-lg/6 text-pretty text-zinc-900 dark:text-gray-300">
                                              {{  $welcome['value'][0]['data']['sub_content'] ?? 'sub_content' }} 
                                            </p>
                                            <div class="mt-3 flex items-center justify-center gap-x-2 lg:justify-start">
                                                <a href="#"
                                                    class="text-xs/4 font-semibold text-slate-700 dark:text-white">Selengkapnya
                                                    <span aria-hidden="true">→</span></a>
                                            </div>
                                        </div>
                                        <div
                                            class=" max-w-screen-sm mt-16 lg:mt-8 lg:mx-0 mx-auto flex flex-col items-center justify-center size-32 ">
                                            <!-- ========== Start img and name ========== -->
                                            {{-- {{  $welcome['value'][0]['data']['sub_content'] ?? 'sub_content' }}  --}}
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/500px-Prabowo_Subianto_2024_official_portrait.jpg"
                                                class="object-cover transition duration-700 ease-out group-hover:scale-105 rounded-md bg-white/5 ring-1 ring-white/10 saturate-0 hover:saturate-50 mb-2"
                                                alt="view of a coastal Mediterranean village on a hillside, with small boats in the water." />
                                            <a href="#"
                                                class="text-xs line-clamp-4 font-semibold text-zinc-900 dark:text-white pb-12">Jhon
                                                Key, S.Sos., MM (Kepala Dinas Komunikasi dan Informatika <span
                                                    aria-hidden="true">→</span></a>
                                            
                                            <!-- ========== End img and name ========== -->
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="py-4 lg:py-8 px-4 w-full max-w-screen-2xl mx-auto text-center ">
                            <div class="mb-4 -mt-2">
                                <div
                                    class="border border-zinc-200/50 dark:border-gray-700/40 dark:border-b-0 lg:mx-12  rounded-[16px] p-1 lg:p-4 md:p-8 mb-8">
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 ">
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
                                            <div
                                                class="group  flex max-w-md flex-col text-on-surface 
                                             dark:text-on-surface-dark">
                                                <div>
                                                    <h2
                                                        class="text-sky-950 text-start dark:text-white text-xl font-extrabold mb-2">
                                                        Populer</h2>
                                                    <hr
                                                        class="w-full rounded-xl h-1 my-4 bg-gray-100 border-0 rounded-sm dark:bg-gray-700" />
                                                </div>
                                                <ul role="list" class="divide-y divide-gray-100">
                                                    <li class="flex justify-between gap-x-6 py-5">
                                                        <div class="flex min-w-0 gap-x-4">
                                                            <img class="size-16 flex-none rounded-md object-cover"
                                                                src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                                alt="">
                                                            <p
                                                                class="text-xs/5 text-gray-900 text-start line-clamp-3 dark:text-white">
                                                                Co-Founder / CEO Lorem ipsum dolor sit amet consectetur
                                                                adipisicing elit. Culp</p>
                                                        </div>
                                                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">

                                                            <p class="mt-1 text-xs/4 text-gray-500">View <time
                                                                    datetime="2023-01-23T13:23Z">44</time></p>
                                                            <p class="mt-2 text-xs/4 text-gray-500">Last seen <time
                                                                    datetime="2023-01-23T13:23Z">3h ago</time></p>
                                                        </div>
                                                    </li>

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

                            <livewire:home.home-component :section="$section" />

                        </div>
                    </x-slot>
                </x-home.section>

                <x-home.section>
                    <x-slot name="content">
                        <div class="py-2 mx-auto max-w-screen-md lg:py-8 "> ">
                            <h1
                                class="mb-4 text-5xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                                Galleri
                            </h1>
                            <p class="text-center mx-auto">asdasd</p>
                            <hr />
                        </div>
                        <div class="relative overflow-hidden bg-white dark:bg-transparent">
                            <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-20">

                                <div class="mt-10  justify-center flex">
                                    <!-- Decorative image grid -->
                                    <div aria-hidden="true"
                                        class="pointer-events-none lg:absolute lg:mx-auto w-full max-w-xl">
                                        <div
                                            class="relative transform sm:top-0 sm:left-0 sm:translate-x-8 lg:top-0 lg:left-0 lg:-translate-y-1/2 lg:translate-x-8">
                                            <div class="flex items-center justify-center space-x-6 lg:space-x-8">

                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-66  overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-66 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-66 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                                <div class="grid shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                        <img src="https://padang.go.id/assets/frontend/img/bg/balaikota.webp"
                                                            alt="" class="size-full object-cover">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </x-slot>
                </x-home.section>
    <x-home.section>
        <x-slot name="content">
            <div class="py-2 mx-auto max-w-screen-md lg:py-6 ">
                <h1
                    class="mb-4 text-5xl font-extrabold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-400 from-gray-500">
                        Pejabat Struktural
                    </span>
                </h1>

                <p
                    class="mb-6 text-sm font-extrabold text-black dark:text-zinc-50/50 md:text-lg lg:text-lg text-center">
                    Kecamatan Koto Tangah
                </p>
                <hr />

                {{-- <div class="grid md:grid-cols-1 gap-8 mb-0">
                                <div class="sm:hidden">
                                    <label for="tabs" class="sr-only">Select your country</label>
                                    <select id="tabs"
                                        class="bg-gray-50 border border-gray-300 text-sky-950 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-sky-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-zinc dark:focus:ring-zinc-500 dark:focus:border-zinc-500">
                                        <option>Students</option>
                                        <option>Office Worker</option>
                                        <option>Job Seeker</option>
                                        <option>Entrepreneur</option>
                                    </select>
                                </div>
                                <ul
                                    class="hidden text-sm font-medium text-center text-gray-500 rounded-lg shadow-sm sm:flex dark:divide-gray-700 dark:text-gray-400">
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 text-sky-950 bg-gray-100 border-r border-gray-200 dark:border-gray-700 rounded-s-lg focus:ring-4 focus:ring-zinc-300 active focus:outline-none dark:bg-zinc-400/60 dark:text-white"
                                            aria-current="page">Students</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-zinc-300 focus:outline-none dark:hover:text-white  dark:bg-zinc-700/10 dark:hover:bg-zinc-700">Office
                                            Worker</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-r border-gray-200 dark:border-gray-700 hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-zinc-300 focus:outline-none dark:hover:text-white dark:bg-zinc-700/10 dark:hover:bg-zinc-700">Entrepreneur</a>
                                    </li>
                                    <li class="w-full focus-within:z-10">
                                        <a href="#"
                                            class="inline-block w-full p-4 bg-white border-s-0 border-gray-200 dark:border-gray-700 rounded-e-lg hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:outline-none focus:ring-zinc-300 dark:hover:text-white dark:bg-zinc-700/10 dark:hover:bg-zinc-700">Entrepreneur</a>
                                    </li>
                                </ul>


                            </div> --}}
            </div>
            <div class="py-2 mx-auto max-w-screen lg:py-8 ">
                <div class="swiper cardSlider" data-xs="2" data-lg="5">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="swiper-slide">
                                <div
                                    class=" border border-gray-100 dark:border-gray-800 rounded-xl p-2 md:p-2 dark:backdrop-blur-sm">

                                    <div class=" mx-auto overflow-hidden  lg:p-2 p-4">
                                        {{-- <span class=" size-48 items-center justify-center overflow-hidden rounded-xl bg-surface-alt text-on-surface/50 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark/50">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-full h-full mt-3 ">
                                                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
                                                        </svg>
                                                    </span> --}}
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Prabowo_Subianto_2024_official_portrait.jpg/500px-Prabowo_Subianto_2024_official_portrait.jpg"
                                            class="rounded-lg h-full object-cover w-full transition duration-700 ease-out group-hover:scale-105"
                                            alt="avatar" />
                                    </div>
                                    <!-- Body -->
                                    <div class="flex flex-col gap-1 p-1 text-center mt-0">
                                        <h3 class="text-balance text-md font-bold text-on-surface-strong lg:text-2xl dark:text-on-surface-dark-strong"
                                            aria-describedby="profileDescription">Alice Brown</h3>
                                        <span
                                            class="mx-auto w-fit 
                                                    text-xs text-on-primary dark:bg-primary-dark dark:text-on-primary-dark rounded-radius">
                                            Title Work</span>

                                        <div class=" flex items-center justify-end gap-3 opacity-50  mt-6">

                                            <!-- Email -->
                                            <a href="mailto:youremailaddress@email.com"
                                                class="text-on-surface hover:text-primary dark:text-on-surface-dark dark:hover:text-primary-dark"
                                                aria-label="email">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" aria-hidden="true" class="size-5 shrink-0">
                                                    <path
                                                        d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                                                    <path
                                                        d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                                                </svg>
                                            </a>

                                            <!-- Instagram -->
                                            <a href="https://www.instagram.com" target="_blank"
                                                class="text-on-surface hover:text-primary dark:text-on-surface-dark dark:hover:text-primary-dark"
                                                aria-label="instagram">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" aria-hidden="true" class="size-4 shrink-0">
                                                    <path
                                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                                </svg>
                                            </a>

                                            <!-- Linkedin -->
                                            <a href="https://www.linkedin.com" target="_blank"
                                                class="text-on-surface hover:text-primary dark:text-on-surface-dark dark:hover:text-primary-dark"
                                                aria-label="linkedin">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    fill="currentColor" aria-hidden="true" class="size-4 shrink-0">
                                                    <path
                                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </x-slot>
    </x-home.section>

    </main>
    </div>
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
                <div class="block w-full">
                    <input type="search"
                        class="text-center block w-full p-3 ps-10 text-sm text-sky-950 rounded-full bg-white  focus:ring-zinc-500 focus:border-zinc-500 dark:bg-zinc-950/70 dark:placeholder-white dark:text-zinc-50 dark:focus:ring-zinc-100 ease-in-out dark:transition-colors"
                        name="search" placeholder="Search" aria-label="search" />
                </div>
            </form>

            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg></a>
        </div>

    </x-modal-cari>

</x-layouts.guest>
