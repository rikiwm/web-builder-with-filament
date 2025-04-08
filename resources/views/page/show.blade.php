@props(['title' => '', 'data' => '', 'url' => $currentUrl ?? null ])
<x-layouts.guest class="">
    <div class="py-2 text-black/50 dark:text-white/50">
        <div class=" min-h-screen
        justify-center selection:bg-[#03A56A] selection:text-white">
            <div class=" w-full px-6 ">
                <main class="py-12">
                    <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto">
                        <div
                            class="flex flex-col justify-center items-center border bg-zinc-100/90 dark:bg-zinc-800/80 w-full h-52 lg:h-64 border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2  px-4 ">
                            <div class="">
                                <h1
                                    class="mb-2 text-3xl font-extrabold text-black dark:text-white md:text-2xl lg:text-5xl text-center">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r to-gray-500 from-sky-950 dark:text-white/50">{{ $title }}</span>
                                </h1>
                              
                            </div>
                               <x-breadcumb.breadcumb>
                                <x-slot name="content">
                                    <li class="flex items-center gap-2">
                                        <a href="/" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong" wire:navigate>Home</a>
                                        <span aria-hidden="true">/</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <a href="{{ url($url) }}" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong" wire:navigate>{{ Str::headline($url ?? '') }}</a>
                                        <span aria-hidden="true">/</span>
                                    </li>
                                    <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong" aria-current="page">{{  Str::limit($title, 12, preserveWords: true); }}</li>
                                </x-slot>
                            </x-breadcumb.breadcumb>
                            </div>
                        <div class="flex justify-center items-center bg-white w-4/5 lg:w-3/4 h-22 lg:h-28 mx-auto border-b-teal-200/30 border-gray-200/20 dark:border-zinc-950 dark:bg-black rounded-[14px] p-0 md:p-2 mb-2 px-4 -mt-12 md:-mt-20 shadow-sm">
                            <div class="py-4 flex justify-between">
                                <div class="flex justify-start lg:justify-center items-center gap-2 block flex-wrap">
                                    <img src="https://diskominfo.majalengkakab.go.id/wp-content/uploads/2017/05/cropped-logo-diskominfo.png" class="size-6 lg:size-8  rounded-full object-cover" alt="avatar"/>
                                    <div class="flex flex-col gap-1 ">
                                        <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Author:</h3>
                                        <span class="text-xs">{{ config('app.name','Laravel')}}</span>
                                    </div>
                                    <div class="flex flex-col gap-1 px-8">
                                        <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Peliput:
                                            </h3>
                                        <span class="text-xs">{{ $data->user->name }}</span>
                                    </div>
                                    <div class="flex lg:flex-col gap-1 ms-auto lg:ms-0">
                                        <h3 class="font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Dilihat:
                                            </h3>
                                        <span class="text-xs font-semibold text-indigo-600"> 333</span>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                
                    <div class="relative isolate overflow-hidden bg-white dark:bg-transparent px-2 py-6 sm:py-6 lg:overflow-visible lg:px-0">
                        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:items-start lg:gap-y-10">
                          <div class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-1 lg:gap-x-8 lg:px-8">
                            <div class="lg:pr-4">
                              <div class="lg:max-w-screen">
                                {{-- <p class="text-base/7 font-semibold text-indigo-600">Deploy faster</p>
                                <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">A better workflow</h1>
                                <p class="mt-6 text-xl/8 text-gray-700">Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas.</p> --}}
                                <x-page.article>
                                    <x-slot name="img">
        <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-1.webp" class="object-cover rounded-md transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />

                                        {{-- <img src="{{ url('storage/' .$data['content'][0]['data']['image'] ?? 'Padang') }}" class="size-16 rounded-md object-cover saturate-0 hover:saturate-50" alt="User avatar"/> --}}
                                    </x-slot>
                                    <x-slot name="categori">
                                        <a href="#"
                                        class="bg-zinc-950 text-zinc-50 text-xs font-medium inline-flex items-center w-fit px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-zinc-400 mb-2">
                                        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                            <path
                                                d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                                        </svg>
                                        {{ $data->categori->name }}
                                    </a>
                                    </x-slot>
                                    <x-slot name="title">
                                   
                                    </x-slot>
                                    <x-slot name="content">
                                        @foreach ($data['content'] as $item)
                                        @if ($item['type'] == 'heading')
                                            <x-content-heading class="" :level="$item['data']['level'] ?? 'h5'" :title="$item['data']['title'] ?? ''"
                                                :uppercase="$item['data']['uppercase'] ?? false" />
                                        @elseif ($item['type'] === 'paragraph')
                                        <x-content-paragraph  :content="$item['data']['content'] ?? ''" />
                                        {{-- <div class="w-full max-w-2xl border-outline bg-white p-2 text-left dark:border-zinc-500/30 dark:bg-zinc-800/20 rounded-lg border">
                                        </div> --}}
                                        {{-- @elseif ($item['type'] === 'images')
                                            <x-content-img :content="$item['data']['image'] ?? ''" class="mb-4" /> --}}
                                        @endif
                                        @endforeach
                                        <span class="text-xs text-on-surface-strong dark:text-on-surface-dark-strong">
                                            <a href="{{ url($url) }}" class="text-zinc-500 hover:text-zinc-300" wire:navigate>Editor: Revo</a>
                                        </span>
                                        <!-- ========== Start share ========== -->
                                        <div class="sm:flex sm:items-center lg:justify-end gap-6  mt-6">
                                            <span class="self-center text-md mb-4 lg:mb-0  whitespace-nowrap dark:text-green-200">Share</span>
                                            {{-- <a href="" class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">
                                            </a> --}}
                                            <ul class="flex flex-wrap items-center mb-4 text-sm font-medium text-gray-500 mt-4 dark:text-gray-400">
                                                <li>
                                                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                                                        <svg class="w-4 h-4 me-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                                                          <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                                                      </svg>
                                                        <span class="sr-only">Twitter page</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white ">
                                                        <svg class="w-4 h-4 me-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                                              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                                                          </svg>
                                                        <span class="sr-only">Facebook page</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- ========== End share ========== -->
                                    </x-slot>
                                </x-page.article>
                              </div>
                            </div>
                          </div>

                          <div class="-mt-12 -ml-12 p-12 lg:sticky lg:top-4 lg:col-start-3 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
                             <x-tabs.tabs-button class="lg:sticky lg:top-4lg:overflow-hidden">
                                    <x-slot name="action">
                                        <button x-on:click="selectedTab = 'new'" 
                                               x-bind:aria-selected="selectedTab === 'new'" 
                                               x-bind:tabindex="selectedTab === 'new' ? '0' : '-1'" 
                                               x-bind:class="selectedTab === 'new' ? 'font-bold text-zinc-500 border-b-2 border-primary dark:border-zinc-500/30 dark:text-zinc-100' : 'text-sky-950 font-medium dark:text-zinc-700 dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-zinc-600'" 
                                               class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelNew" >Terbaru</button>
                                        <button x-on:click="selectedTab = 'popular'" x-bind:aria-selected="selectedTab === 'popular'" 
                                           x-bind:tabindex="selectedTab === 'popular' ? '0' : '-1'" 
                                           x-bind:class="selectedTab === 'popular' ? 'font-bold text-zinc-500 border-b-2 border-primary dark:border-primary-dark dark:text-zinc-100' : 'text-sky-950 font-medium dark:text-zinc-700 dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" 
                                           class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelpPpular" >Populer</button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <div x-cloak x-show="selectedTab === 'new'" id="tabpanelNew" role="tabpanel" aria-label="new">
                                            @for($i = 0; $i < 4; $i++)
                                            <div class="mb-2 w-full max-w-2xl border-outline bg-white p-2 text-left dark:border-zinc-500/30 dark:bg-zinc-800/20 rounded-lg border" >
                                                <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                    <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp" class="size-16 rounded-md object-cover saturate-0 hover:saturate-50" alt="User avatar"/>
                                                    <span class="text-xs font-bold">write a short paragraph about penguin
                                                        <br>
                                                        <a href="#" class="text-2xs font-extralight hover:underline focus:underline focus:outline-hidden text-zinc-500/50 dark:text-zinc-800">Read if bored</a>
                                                    </span>

                                                </div>

                                            </div>

                                            @endfor
                                        </div>
                                        <div x-cloak x-show="selectedTab === 'popular'" id="tabpanelPopular" role="tabpanel" aria-label="popular">
                                           @for($i = 0; $i < 4; $i++)
                                            <div class="w-full max-w-2xl border-outline bg-surface-alt p-2 text-left dark:border-zinc-500/30 dark:bg-zinc-800/20 rounded-lg border" >
                                                <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                    <img src="https://thumbs.dreamstime.com/b/web-324830810.jpg" class="size-16 rounded-md object-cover saturate-0 hover:saturate-50" alt="User avatar"/>
                                                    <span class="text-xs font-bold">write a short  about penguin</span>
                                                </div>
                                            </div>
                                            @endfor

                                        </div>
                                    </x-slot>

                                </x-tabs.tabs-button>
                          </div>

                        </div>
                      </div>
                      
                </main>
            </div>
        </div>
    </div>
</x-layouts.guest>
