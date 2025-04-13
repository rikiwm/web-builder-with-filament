@props(['team' => ''])
{{-- {{ $team }} --}}
{{-- {{ dd($team) }} --}}
<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="py-2 mx-auto max-w-screen-sm lg:py-4 ">
        <h1
            class="mb-2 text-5xl font-semibold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-400 from-gray-500">
                Pejabat Struktural
            </span>
        </h1>

        <p
            class="mb-4 text-sm font-base text-black dark:text-zinc-50/50 md:text-lg lg:text-lg text-center">
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
    <div class="py-2 mx-auto max-w-screen-lg lg:py-4 ">
        @php
            $data = 0;
            if(isset($team['value']))
            {
                $count = count($team['value']);
            if ($count >= 6) {
                $data = 4;
            }else {
                $data = $count;
            }
            }
   
        @endphp
        <div class="swiper cardSlider" data-xs="2" data-lg="{{ $data }}">
            <div class="swiper-wrapper">
                @isset($team['value'])
                    
                @forelse ($team['value'] as $t)
                <div class="swiper-slide">
                    <div
                        class=" border border-gray-100 dark:border-gray-800 rounded-xl p-2 md:p-2 dark:backdrop-blur-sm">
                        <div class=" mx-auto overflow-hidden  lg:p-2 p-4">
                            <img src="{{ url('storage/' . $t['data']['images']) }}"
                                class="rounded-lg h-52 object-cover w-full  transition duration-700 ease-out group-hover:scale-105"
                                alt="avatar" />
                        </div>
                        <!-- Body -->
                        <div class="flex flex-col gap-1 p-1 text-center mt-0">
                            <h3 class="text-balance text-md font-semibold text-on-surface-strong lg:text-2xl dark:text-on-surface-dark-strong"
                                aria-describedby="profileDescription">{{ $t['data']['name']}}</h3>
                            <span class="mx-auto w-fit  text-xs text-on-primary dark:bg-primary-dark dark:text-on-primary-dark rounded-radius">
                                {{ $t['data']['title']}}
                            </span>
                            <div class=" flex items-center justify-end gap-3 opacity-50  mt-6">
                                <!-- Email -->
                                <a href="mailto:{{ $t['data']['mail'] }}"
                                    class="text-sky-950 hover:text-primary dark:text-on-surface-dark dark:hover:text-primary-dark"
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
                                    class="text-pink-800 hover:text-primary dark:text-on-surface-dark dark:hover:text-primary-dark"
                                    aria-label="instagram">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                        fill="currentColor" aria-hidden="true" class="size-4 shrink-0">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse
                @endisset

            </div>
        </div>
    </div>
</div>
