@props(['title' => '', 'data' => '','slug' => $data->slug ?? null, 'model_view' => '' ])
<div>
    <x-page.section-page>
        <x-slot name="content">
            <div class="mx-auto w-full lg:max-w-screen-lg ">
                @if($data['layout'] === 'default')
                    @foreach ($data['content'] as $item)
                        @if ($item['type'] == 'heading')
                        <div class="mt-2 py-2">
                            <h1 class="mb-2 text-2xl font-semibold text-slate-400 dark:text-white md:text-2xl lg:text-3xl text-center">
                                <span class="bg-clip-text">
                                    <x-content-heading class="" :level="$item['data']['level'] ?? 'h5'" :title="$item['data']['title'] ?? ''" :uppercase="$item['data']['uppercase'] ?? false" />    
                                </span>
                            </h1>
                            <hr class=" border-slate-600/50 dark:border-zinc-800 mb-4 rounded-full w-12 mx-auto">
                        </div>
                     
                        @elseif ($item['type'] === 'paragraph')
                        <x-content-paragraph :content="$item['data']['content'] ?? ''" />
                    
                        @elseif ($item['type'] === 'image')
                        <x-page.partials.content-img :content="$item['data']['images'] ?? ''" class="mb-4 rounded-lg bg-black" />
                   
                        @endif
                    @endforeach
                @elseif($data['layout'] === 'model-1')
                @foreach ($data['content'] as $item)
                    @if ($item['type'] == 'heading')
                    <div class="mt-4">
                        <h1 class="mb-4 text-2xl font-semibold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                            <span class="bg-clip-text bg-gradient-to-r to-zinc-800 from-gray-600">
                                <x-content-heading class="" :level="$item['data']['level'] ?? 'h5'" :title="$item['data']['title'] ?? ''" :uppercase="$item['data']['uppercase'] ?? false" />    
                            </span>
                        </h1>
                    </div>
                    @elseif ($item['type'] === 'paragraph')
                    <x-content-paragraph :content="$item['data']['content'] ?? ''" />
                    @elseif ($item['type'] === 'image')
                    <x-page.partials.content-img :content="$item['data']['images'] ?? ''" class="mb-4" />
                    {{-- <div class="mx-auto w-full  max-w-screen-md flex flex-col gap-4 p-6  border border-zinc-200 dark:border-zinc-700 rounded-xl">
                    </div> --}}
                    @endif
                @endforeach
                
                @elseif($data['layout'] === 'model-2')
                @elseif($data['layout'] === 'model-3')
                @elseif($data['layout'] === 'model-4')
                @elseif($data['layout'] === 'model-5')
                @elseif($data['layout'] === 'model-6')
                @else
                    @if($slug === null)
                    @elseif($slug === 'tentang-kota-padang')
                        <div x-data="{ selectedTab: '0' }" class="grid grid-cols-3">
                            <ul x-on:keydown.right.prevent="$focus.wrap().next()" 
                                x-on:keydown.left.prevent="$focus.wrap().previous()"
                                class="lg:col-span-1 col-span-3 space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0"
                                role="tablist" 
                                aria-label="tab options">
                                @foreach ($data['content'] as $key => $item)
                                    @if ($item['type'] === 'heading')
                                        <a 
                                            x-on:click="selectedTab = '{{ $key }}'" 
                                            x-bind:aria-selected="selectedTab === '{{ $key }}'" 
                                            x-bind:tabindex="selectedTab === '{{ $key }}' ? '0' : '-1'" 
                                            x-bind:class="selectedTab === '{{ $key }}' ? 'font-bold text-white border-r-2 border-zinc-500 dark:border-zinc-800 dark:text-zinc-50 bg-zinc-500' : 'bg-zinc-200 text-zinc-950 font-medium dark:text-zinc-700 dark:hover:border-r-zinc-500 dark:hover:text-on-surface-dark-strong hover:border-r-2 hover:border-r-outline-strong hover:text-on-surface-strong'" 
                                        class="inline-flex items-center px-4 py-3  rounded-lg w-full "
                                            type="button" 
                                            role="tab" 
                                            aria-controls="tabpanel{{ $key }}"
                                        >
                                            <svg class="w-4 h-4 me-2 text-zinc-950 dark:text-zinc-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                            </svg>
                                            {{ $item['data']['title'] }}
                                        </a>
                                    
                                    @endif
                                @endforeach
                            </ul>
                        
                            <div class="lg:col-span-2 col-span-3">
                                @foreach ($data['content'] as $key => $item)
                                    @if ($item['type'] === 'paragraph')
                                    <div class="p-6 bg-gradient-to-t to-zinc-50 dark:to-zinc-950 from-transparent text-medium text-gray-500 dark:text-gray-400 dark:bg-zinc-800 rounded-xl w-full"
                                        x-cloak 
                                        x-show="selectedTab === '{{  $key - 1 }}'" 
                                        id="tabpanel{{ $key - 1 }}" 
                                        role="tabpanel" 
                                        aria-label="{{ $key - 1 }}">
                                        {!! $item['data']['content'] ?? '' !!}
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>             
                    
                    @elseif ($slug === 'faq')
                        <h1 class="mb-4 text-5xl font-semibold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-500 from-sky-900">
                            Pertanyaan sering di ajukan
                        </span>
                        </h1>
                        <div x-data="{ selectedAccordionItem: null }" class="w-full overflow-hidden rounded-lg border border-zinc-200 text-zinc-800 dark:border-zinc-600/30 dark:backdrop-blur-md dark:text-gray-400">
                            @foreach ($data['content'] as $key => $item)
                                <div>
                                    @if ($item['type'] === 'heading')
                                        <button id="controlsAccordionItem{{ $key }}" type="button"
                                            class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                                            aria-controls="accordionItem{{ $key }}"
                                            x-on:click="selectedAccordionItem = selectedAccordionItem === '{{ $key }}' ? null : '{{ $key }}'"
                                            x-bind:class="selectedAccordionItem === '{{ $key }}' ? 'text-zinc-900 dark:text-zinc-50 font-bold ' : 'text-zinc-600 dark:text-zinc-400 font-medium'"
                                            x-bind:aria-expanded="selectedAccordionItem === '{{ $key }}' ? 'true' : 'false'">
                                            {{ $item['data']['title'] }}
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition"
                                                aria-hidden="true" x-bind:class="selectedAccordionItem === '{{ $key }}' ? 'rotate-180' : ''">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                            </svg>
                                        </button>
                                    @elseif ($item['type'] === 'paragraph')
                                        <div x-cloak x-show="selectedAccordionItem === '{{ $key - 1 }}'" id="accordionItem{{ $key }}" role="region"
                                            aria-labelledby="controlsAccordionItem{{ $key }}" x-collapse>
                                            <div class="ms-4 p-4 mb-4 text-sm sm:text-base text-pretty dark:text-zinc-400">
                                                {!! $item['data']['content'] ?? '' !!}
                                                {{-- <a href="#" class="underline underline-offset-2 text-primary dark:text-primary-dark">documentation</a>
                                                for additional information. --}}
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                
                    @else
                        <div class="grid gap-6 lg:grid-cols-1 lg:gap-8">
                            <div href="https://laravel.com/docs" id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-[14px] backdrop-blur-sm bg-zinc-50 p-4 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.04)] ring-1 ring-white/[0.05]
                                    transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                                    focus-visible:ring-[#03A56A] md:row-span-3 lg:p-6 dark:bg-black dark:ring-zinc-800
                                    dark:hover:text-white/70 hover:ring-zinc-500  dark:hover:ring-zinc-900 dark:focus-visible:ring-[#03A56A]">

                                <div class=" grid lg:grid-cols-3 grid-cols-1 items-start gap-6 ">
                                    <div class="sm:col-span-2 rounded-lg ">
                                        <div x-data="{videoModalIsOpen: false}">
                                                <a x-on:click="videoModalIsOpen = true, $refs.video.play()" type="button" id="screenshot-container" class="cursor-pointer relative flex items-stretch flex-1 w-full ">
                                                    <img src="https://wallpapercave.com/wp/wp6688632.jpg"
                                                        alt="Laravel documentation screenshot"
                                                        class="hidden aspect-video h-full w-full flex-1 rounded-[20px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block " />
                                                    <img src="https://s-media-cache-ak0.pinimg.com/736x/79/64/99/796499dbcfc72f3f4ee132a1bdae6d83.jpg"
                                                        alt="Laravel documentation screenshot"
                                                        class="block aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.20)] dark:hidden " />
                
                                                </a>
                                            <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="videoModalIsOpen" x-on:keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()" x-on:click.self="videoModalIsOpen = false, $refs.video.pause()" class="fixed inset-0 z-50 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
                                                <!-- Modal Dialog -->
                                                <div x-show="videoModalIsOpen" x-transition:enter="transition ease-out duration-300 delay-200" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" class="max-w-2xl w-full relative">
                                                    <!-- Close Button -->
                                                    <button type="button" x-show="videoModalIsOpen" x-on:click="videoModalIsOpen = false, $refs.video.pause()" x-transition:enter="transition ease-out duration-200 delay-500" x-transition:enter-start="opacity-0 scale-0" x-transition:enter-end="opacity-100 scale-100" class="absolute -top-12 right-0 flex items-center justify-center rounded-full bg-surface-alt p-1.5 text-on-surface-strong hover:opacity-75 active:opacity-100 dark:bg-surface-dark-alt dark:text-on-surface-dark-strong" aria-label="close modal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                                    </svg>
                                                    </button>
                                                    <!-- Video -->
                                                    <video x-ref="video" class="w-full max-w-2xl rounded-radius aspect-video" controls>
                                                        <track default kind="captions" srclang="en" src="path to your .vtt file" />
                                                        <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.webm" type="video/webm">
                                                        <source src="https://penguinui.s3.amazonaws.com/component-assets/peng.mp4" type="video/mp4">
                                                        Your browser does not support HTML video.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" sm:col-span-1 rounded-lg">
                                        <div class="pt-3 sm:pt-5 lg:pt-0 ">
                                            <h1 class="text-xl md:text-5xl font-semibold text-black dark:text-white">
                                                {{ $data['content'][0]['data']['title'] ?? 'Lorem ipsum dolor' }}
                                            </h1>
                                            <p class="mt-4 md:text-md">
                                                {!! $data['content'][1]['data']['content'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae' !!}
                                            </p>
                                        </div>
                            
                                    </div>

                                </div>
                            </div>
                            <div
                                class="md:max-w-screen-lg mx-auto rounded-xl  p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.03)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none
                            focus-visible:ring-[#03A56A] lg:pb-10 backdrop-blur-sm bg-white/30 dark:bg-transparent dark:hover:bg-zinc-950 dark:hover:bg-opacity-40 dark:ring-zinc-800 hover:ring-zinc-500 hover:bg-white dark:hover:text-white/70 dark:hover:ring-zinc-900 dark:focus-visible:ring-[#03A56A]">
                                <div class="relative grid grid-cols-3 items-start justify-center gap-6">
                                    <div class="hidden lg:block rounded-lg ">
                                        <h1 class="text-xl md:text-4xl font-semibold text-black dark:text-white">
                                            {{ $data['content'][2]['data']['title'] ?? ' Quisquam, ipsum dolor sit Quisquam, quae lorem' }}
                                        </h1>
                                    </div>
                                    <div class="col-span-3 lg:col-span-2 flex flex-col items-end rounded-lg  ">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">
                                            {{ $data['content'][2]['data']['title'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }} </h2>
                                        <h5 class="mt-4 text-sm text-end">
                                            {!! $data['content'][3]['data']['content'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae Lorem Quisquam, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem' !!}
                                        </h5>
                                    </div>
                                </div>
                                {{-- <div class="">
                                    <button type="button"
                                        class="text-white bg-zinc-500 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-zinc-600 dark:hover:bg-zinc-500 dark:focus:ring-zinc-800">
                                        Lihat semua
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </button>
                                </div> --}}

                            </div>
                            <div class="mt-4">
                                <h1
                                    class="mb-4 text-2xl font-semibold text-black dark:text-white md:text-2xl lg:text-4xl text-center">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r to-zinc-800 from-gray-600">Program
                                        Unggulan</span>
                                </h1>
                                <p
                                    class="mb-0 text-sm font-semibold text-zinc-950 dark:text-white md:text-lg lg:text-lg text-center">
                                    {{ $title }} Kota Padang</span>
                                </p>
                                {{-- @dd($data['content'][1]['data']) --}}
                            </div>

                            {{-- <div class=" py-2 md:py-6 mx-auto max-w-screen p-6 lg:p-4  ">
                                <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                    <div
                                        class=" border border-zinc-200 dark:border-zinc-800 rounded-lg p-4 md:p-4 dark:backdrop-blur-sm">
                                        <a href="#"
                                            class="bg-zinc-950 text-zinc-50 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-zinc-400 mb-2">
                                            <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                                <path
                                                    d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                            </svg>
                                            Design
                                        </a>
                                        <h2 class="text-gray-900 dark:text-white text-xl font-semibold mb-2">Start with
                                            laravel Design System</h2>
                                        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                            websites
                                            of tools that even influence both web designers and developers.</p>
                                    </div>
                                    @endfor

                                </div>

                            </div> --}}

                            <div class=" py-2 md:py-6 mx-auto max-w-screen p-6 lg:p-4  ">
                                <div class="grid  md:grid-cols-4 gap-6 mb-1">
                                    <div
                                        class="col-span-3 lg:col-span-1 border border-zinc-200 bg-zinc-500 dark:border-zinc-800 rounded-xl p-4 md:p-4 dark:bg-zinc-950/60 dark:backdrop-blur-sm">

                                        <h2 class="text-gray-200 dark:text-white text-xl font-semibold mb-2">Kontribusi
                                        Padang
                                            Terhadap Negara </h2>
                                        <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem

                                        </p>
                                        <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem

                                        </p>
                                        <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem
                                        </p>
                                        <p class="text-sm font-normal text-gray-300 dark:text-gray-400 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem
                                        </p>

                                    </div>
                                    <div
                                    class="col-span-3 w-full lg:col-span-3 border border-gray-200 dark:border-zinc-800 rounded-xl p-4 md:p-4 dark:backdrop-blur-sm">

                                    <h2 class="text-gray-900 dark:text-white text-xl font-semibold mb-2">Start with
                                        laravel Design System</h2>
                                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-1">Static
                                        websites Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet csquam, quae lorem
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae loremLorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae lorem
                                        of tools that even influence both web designers and developers.</p>

                                </div>
                                </div>
                            </div>


                        </div>
                    @endif
                @endif
              


            </div>
        </x-slot>
    </x-page.section-page>
</div>
