<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ Str::of(url()->current())->chopStart(['https://', 'http://'])->chopEnd(['padang.go.id',':8000'])->basename()->headline()->append(' - ',$app_name['value'][0]['data']['desc'] ?? 'desc')}}</title>
    <link href="https://fonts.cdnfonts.com/css/millunium" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<style>
.card {
  min-width: 200px;
  height: 150px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}



</style>
<body class="font-sans antialiased h-full bg-white dark:bg-black">
    <header>
        <x-inc.header :data="$nav">
        </x-inc.header>

    </header>
    {{-- @env('staging')
   
    @endenv --}}
    <div id="main-content" class="w-full">
        {{ $slot }}
    </div>

    <x-inc.footer-panel class="bg-zinc-200/90 dark:bg-zinc-800/80 rounded-xl lg:mx-4">
        <x-slot name="content">
              <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 ">
              <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                      <x-application-logo class="block w-auto fill-current dark:text-zinc-300 h-9 me-3 text-zinc-950" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-zinc-100 text-zinc-950">
                            {{  $app_name['value'][0]['data']['desc'] ?? 'Name' }} 
                        </span>
                    </a>
                </div>
                <div class="grid grid-cols-1 gap-8 sm:gap-8 sm:grid-cols-4">
                    <div>
                        <h2 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">Profile</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            @forelse ($nav as $item)
                                @if ($item['name'] == 'Profile' && $item->children->isNotEmpty())
                                    @foreach ($item->children as $item_child)
                                    <li class="mb-2">
                                        <a href="{{ url($item_child['slug']) }}" class=" text-xs hover:underline capitalize">{{ $item_child['name'] ?? '' }}</a>
                                    </li> 
                                    @endforeach
                                @endif
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
               
                            <li class="mb-2">
                                <a href="/faq" class="text-xs hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">Link</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-1">
                                <a href="https://lapor.go.id/" class="text-xs hover:underline">Lapor</a>
                            </li>
                            <li class="mb-1">
                                <a href="https://padang.go.id/" class="text-xs hover:underline">PADANG.GO.ID</a>
                            </li>
                            <li class="mb-1">
                                <a href="https://ppid.padang.go.id/" class="text-xs hover:underline">PPID</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-2 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tautan</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        @forelse ($nav as $item)
                            @if ($item['type'] == 'link')
                                <li class="mb-2">
                                    <a href="{{ url($item['slug']) }}" class=" text-xs hover:underline capitalize">{{ $item['name'] ?? '' }}</a>
                                </li> 
                            @endif
                        @empty
                        @endforelse
                        </ul>
                    </div>
                </div>
            </div>
  
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-900 lg:my-8" />
            <div class="px-4 py-6 bg-zinc-50 dark:bg-zinc-950 md:flex  sm:text-center  md:items-center md:justify-between rounded-xl sm:justify-center">
                <span class="text-sm text-gray-400 dark:text-gray-200 sm:text-center">Support by Diskominfo Padang © 2023 <a href="#">
                    {{  $copyright['value'][0]['data']['desc'] ?? 'desc' }} 
                </a>. All Rights Reserved.
                </span>
            
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    {{-- @forelse ($social as $item)
                    @forelse ($item['value'] as $val)
                    @foreach ($val['data'] as $keys)
                        <a href="" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                            {{ $keys }}
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                                <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="sr-only"></span>
                        </a>
                    @endforeach
             
                    @empty
                        
                    @endforelse
                   
                    @empty
                        
                    @endforelse --}}
                   
                      <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                                <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                            </svg>
                          <span class="sr-only">Discord community</span>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/>
                        </svg>
                          <span class="sr-only">Twitter page</span>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                          </svg>
                          <span class="sr-only">GitHub account</span>
                      </a>
                      <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                        </svg>
                          <span class="sr-only">Dribbble account</span>
                      </a>
                </div>
              </div>
              </div>
        </x-slot>
    </x-inc.footer-panel>
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script> --}}
    @livewireScripts
    <x-script.dark-light />
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
</body>
</html>

{{-- <div id="banner" tabindex="-1" class="fixed z-50 flex w-full items-start justify-between gap-8 border-b border-gray-200 bg-gray-50 px-4 py-3 dark:border-gray-700 dark:bg-gray-800 sm:items-center lg:py-4">
    <p class="mx-auto text-base text-gray-500 dark:text-gray-400"><span class="font-medium text-gray-900 dark:text-white">Autumn Sale is Here!</span> 🌟 Whether you're prepping for cooler days or refreshing your home, now’s the time <a href="#" class="font-medium text-gray-900 underline hover:no-underline dark:text-white">to shop!</a></p>
    <button data-collapse-toggle="banner" type="button" class="flex items-center rounded-lg p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
      <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div> --}}


  {{-- card --}}
              {{-- <div class="border border-t-0 border-gray-200 dark:border-gray-700 rounded-xl p-4 lg:p-10 bg-white dark:backdrop-blur-sm dark:bg-transparent
                mb-12 mx-auto max-w-screen-lg -m-36">
                <div class="grid md:grid-cols-8 grid-cols-4 gap-8">
                    @for ($i = 1; $i <= 8; $i++)
                    <a href="#" class="flex flex-col p-4 bg-gray-200 border border-gray-200
                    rounded-lg shadow-sm hover:bg-green-100/20 dark:bg-green-800/20 dark:border-gray-700
                     dark:hover:bg-gray-700">
                        <svg class="w-12 text-green-900/80 dark:text-green-100/60 mx-auto"aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 21">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3.464V1.1m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175C17 15.4 17 16 16.462 16H3.538C3 16 3 15.4 3 14.807c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 10 3.464ZM4 3 3 2M2 7H1m15-4 1-1m1 5h1M6.54 16a3.48 3.48 0 0 0 6.92 0H6.54Z"/>
                        </svg>
                    </a>

                    @endfor
                </div>
            </div> --}}


            <!-- ========== Start rating ========== -->
         
            {{-- <div x-data="{ currentVal: 3 }" class="flex items-center gap-1">
                <label for="veryDissatisfied" class="transition hover:scale-125 has-focus:scale-125">
                    <span class="sr-only">very dissatisfied</span>
                    <input x-model="currentVal" id="veryDissatisfied" type="radio" class="sr-only" name="rating" value="1">
                    <span class="text-2xl" x-bind:class="currentVal > 0 ? 'grayscale-0' : 'grayscale'">🥴</span>
                </label>
            
                <label for="dissatisfied" class="transition hover:scale-125 has-focus:scale-125">
                    <span class="sr-only">dissatisfied</span>
                    <input x-model="currentVal" id="dissatisfied" type="radio" class="sr-only" name="rating" value="2">
                    <span class="text-2xl" x-bind:class="currentVal > 1 ? 'grayscale-0' : 'grayscale'">😕</span>
                </label>
            
                <label for="neutral" class="transition hover:scale-125 has-focus:scale-125">
                    <span class="sr-only">neutral</span>
                    <input x-model="currentVal" id="neutral" type="radio" class="sr-only" name="rating" value="3">
                    <span class="text-2xl" x-bind:class="currentVal > 2 ? 'grayscale-0' : 'grayscale'">😐</span>
                </label>
            
                <label for="satisfied" class="transition hover:scale-125 has-focus:scale-125">
                    <span class="sr-only">satisfied</span>
                    <input x-model="currentVal" id="satisfied" type="radio" class="sr-only" name="rating" value="4">
                    <span class="text-2xl" x-bind:class="currentVal > 3 ? 'grayscale-0' : 'grayscale'">😊</span>
                </label>
            
                <label for="verySatisfied" class="transition hover:scale-125 has-focus:scale-125">
                    <span class="sr-only">very satisfied</span>
                    <input x-model="currentVal" id="verySatisfied" type="radio" class="sr-only" name="rating" value="5">
                    <span class="text-2xl" x-bind:class="currentVal > 4 ? 'grayscale-0' : 'grayscale'">😍</span>
                </label>
            </div>   --}}
            

            <!-- ========== End rating ========== -->
            

            <!-- ========== Start search ========== -->
            {{-- <div class="relative flex w-full max-w-xs flex-col gap-1 text-on-surface dark:text-on-surface-dark">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-on-surface/50 dark:text-on-surface-dark/50"> 
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
                <input type="search" class="w-full rounded-radius border border-outline bg-surface-alt py-2 pl-10 pr-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" name="search" placeholder="Search" aria-label="search"/>
            </div> --}}
            
            <!-- ========== End search ========== -->


            <!-- ========== Start coment ========== -->
            {{-- <div class="flex w-full max-w-md flex-col overflow-hidden rounded-radius border border-outline text-on-surface dark:border-outline-dark dark:text-on-surface-dark">
                <div class="bg-surface-alt/50 dark:bg-surface-dark-alt/50 p-2">
                    <textarea class="scroll-on z-10 w-full resize-none bg-transparent p-4 text-sm focus:outline-hidden" name="message" rows="6" placeholder="Type your message here..."></textarea>
                </div>
                <!-- Footer Container -->
                <div class="flex w-full items-center justify-between border-t border-outline bg-surface-alt px-2.5 py-2 dark:border-outline-dark dark:bg-surface-dark-alt">
                    <!-- Action Buttons -->
                    <div class="flex items-center gap-2">
                        <!-- Emoji Button -->
                        <button class="rounded-full p-1 text-on-surface/75 hover:bg-surface-dark/10 hover:text-on-surface focus:outline-hidden focus-visible:text-on-surface focus-visible:outline-offset-0 focus-visible:outline-primary active:bg-surface-dark/5 active:-outline-offset-2 dark:text-on-surface-dark/75 dark:hover:bg-surface/10 dark:hover:text-on-surface-dark dark:focus-visible:text-on-surface-dark dark:focus-visible:outline-primary-dark dark:active:bg-surface/5" title="Emojies" aria-label="Emojies">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-5">
                                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 0 0-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634Zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 0 1-.189-.866c0-.298.059-.605.189-.866Zm2.023 6.828a.75.75 0 1 0-1.06-1.06 3.75 3.75 0 0 1-5.304 0 .75.75 0 0 0-1.06 1.06 5.25 5.25 0 0 0 7.424 0Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Attach Button -->
                        <button class="rounded-full p-1 text-on-surface/75 hover:bg-surface-dark/10 hover:text-on-surface focus:outline-hidden focus-visible:text-on-surface focus-visible:outline-offset-0 focus-visible:outline-primary active:bg-surface-dark/5 active:-outline-offset-2 dark:text-on-surface-dark/75 dark:hover:bg-surface/10 dark:hover:text-on-surface-dark dark:focus-visible:text-on-surface-dark dark:focus-visible:outline-primary-dark dark:active:bg-surface/5" title="attach a file" aria-label="attach a file">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-5">
                                <path fill-rule="evenodd" d="M18.97 3.659a2.25 2.25 0 0 0-3.182 0l-10.94 10.94a3.75 3.75 0 1 0 5.304 5.303l7.693-7.693a.75.75 0 0 1 1.06 1.06l-7.693 7.693a5.25 5.25 0 1 1-7.424-7.424l10.939-10.94a3.75 3.75 0 1 1 5.303 5.304L9.097 18.835l-.008.008-.007.007-.002.002-.003.002A2.25 2.25 0 0 1 5.91 15.66l7.81-7.81a.75.75 0 0 1 1.061 1.06l-7.81 7.81a.75.75 0 0 0 1.054 1.068L18.97 6.84a2.25 2.25 0 0 0 0-3.182Z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Voice Button -->
                        <button class="rounded-full p-1 text-on-surface/75 hover:bg-surface-dark/10 hover:text-on-surface focus:outline-hidden focus-visible:text-on-surface focus-visible:outline-offset-0 focus-visible:outline-primary active:bg-surface-dark/5 active:-outline-offset-2 dark:text-on-surface-dark/75 dark:hover:bg-surface/10 dark:hover:text-on-surface-dark dark:focus-visible:text-on-surface-dark dark:focus-visible:outline-primary-dark dark:active:bg-surface/5" title="send voice" aria-label="send voice">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-5">
                                <path d="M8.25 4.5a3.75 3.75 0 1 1 7.5 0v8.25a3.75 3.75 0 1 1-7.5 0V4.5Z" />
                                <path d="M6 10.5a.75.75 0 0 1 .75.75v1.5a5.25 5.25 0 1 0 10.5 0v-1.5a.75.75 0 0 1 1.5 0v1.5a6.751 6.751 0 0 1-6 6.709v2.291h3a.75.75 0 0 1 0 1.5h-7.5a.75.75 0 0 1 0-1.5h3v-2.291a6.751 6.751 0 0 1-6-6.709v-1.5A.75.75 0 0 1 6 10.5Z" />
                            </svg>
                        </button>
                    </div>
                    <!-- Send Button -->
                    <button class="whitespace-nowrap rounded-radius border border-primary bg-primary px-4 py-2 text-center text-xs font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:border-primary-dark dark:focus-visible:outline-primary-dark" type="button" aria-label="send">Send</button>
                </div>
            </div> --}}
            
            <!-- ========== End coment ========== -->
            
            
            <!-- ========== Start toogle ========== -->
            {{-- <label for="defaultToggle" class="inline-flex items-center gap-3">
                <input id="defaultToggle" type="checkbox" class="peer sr-only" role="switch" checked  />
                <span class="trancking-wide text-sm font-medium text-on-surface peer-checked:text-on-surface-strong peer-disabled:cursor-not-allowed peer-disabled:opacity-70 dark:text-on-surface-dark dark:peer-checked:text-on-surface-dark-strong">Toggle</span>
                <div class="relative h-6 w-11 after:h-5 after:w-5 peer-checked:after:translate-x-5 rounded-full border border-outline bg-surface-alt after:absolute after:bottom-0 after:left-[0.0625rem] after:top-0 after:my-auto after:rounded-full after:bg-on-surface after:transition-all after:content-[''] peer-checked:bg-primary peer-checked:after:bg-on-primary peer-focus:outline-2 peer-focus:outline-offset-2 peer-focus:outline-outline-strong peer-focus:peer-checked:outline-primary peer-active:outline-offset-0 peer-disabled:cursor-not-allowed peer-disabled:opacity-70 dark:border-outline-dark dark:bg-surface-dark-alt dark:after:bg-on-surface-dark dark:peer-checked:bg-primary-dark dark:peer-checked:after:bg-on-primary-dark dark:peer-focus:outline-outline-dark-strong dark:peer-focus:peer-checked:outline-primary-dark" aria-hidden="true"></div>
            </label> --}}
            
            <!-- ========== End toogle ========== -->


            <!-- ========== Start radio ========== -->
            {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Mac -->
                <label class="relative flex items-center gap-4 rounded-radius bg-surface-alt p-2 hover:scale-105 transition-transform text-on-surface dark:text-on-surface-dark dark:bg-surface-dark-alt has-checked:border-primary has-checked:bg-primary/5 has-checked:text-on-surface-strong has-checked:border has-focus:outline-2 has-focus:outline-offset-2 has-focus:outline-primary dark:has-checked:border-primary-dark dark:has-checked:text-on-surface-dark-strong dark:has-checked:bg-primary-dark/5 dark:has-focus:outline-primary-dark border border-outline dark:border-outline-dark">
                    <input type="radio" id="osMac" aria-describedby="macDescription" class="sr-only peer" name="os" value="mac" checked >
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 16 16" fill="currentColor" class="peer-checked:visible invisible w-5 h-5 shrink-0">
                        <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd">
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 opacity-70 shrink-0" viewBox="0 0 16 16">
                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282">
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="font-medium" aria-hidden="true">Mac</h3>
                        <small id="macDescription">MacOS Catalina and higher</small>
                    </div>
                </label>
                <!-- Windows -->
                <label class="relative flex items-center gap-4 rounded-radius bg-surface-alt p-2 hover:scale-105 transition-transform text-on-surface dark:text-on-surface-dark dark:bg-surface-dark-alt has-checked:border-primary has-checked:bg-primary/5 has-checked:text-on-surface-strong has-checked:border has-focus:outline-2 has-focus:outline-offset-2 has-focus:outline-primary dark:has-checked:border-primary-dark dark:has-checked:text-on-surface-dark-strong dark:has-checked:bg-primary-dark/5 dark:has-focus:outline-primary-dark border border-outline dark:border-outline-dark">
                    <input type="radio" id="osWindows" aria-describedby="windowsDescription" class="sr-only peer" name="os" value="windows">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 16 16" fill="currentColor" class="peer-checked:visible invisible w-5 h-5 shrink-0">
                        <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd">
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 opacity-70 shrink-0" viewBox="0 0 16 16">
                        <path d="M6.555 1.375 0 2.237v5.45h6.555zM0 13.795l6.555.933V8.313H0zm7.278-5.4.026 6.378L16 16V8.395zM16 0 7.33 1.244v6.414H16z">
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="font-medium" aria-hidden="true">Windows</h3>
                        <small id="windowsDescription">Windows 10 and higher</small>
                    </div>
                </label>
                <!-- Linux -->
                <label class="relative flex items-center gap-4 rounded-radius bg-surface-alt p-2 hover:scale-105 transition-transform text-on-surface dark:text-on-surface-dark dark:bg-surface-dark-alt has-checked:border-primary has-checked:bg-primary/5 has-checked:text-on-surface-strong has-checked:border has-focus:outline-2 has-focus:outline-offset-2 has-focus:outline-primary dark:has-checked:border-primary-dark dark:has-checked:text-on-surface-dark-strong dark:has-checked:bg-primary-dark/5 dark:has-focus:outline-primary-dark border border-outline dark:border-outline-dark">
                    <input type="radio" id="osLinux" aria-describedby="linuxDescription" class="sr-only peer" name="os" value="linux">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" viewBox="0 0 16 16" fill="currentColor" class="peer-checked:visible invisible w-5 h-5 shrink-0">
                        <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd">
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-6 w-6 opacity-70 shrink-0" viewBox="0 0 16 16">
                        <path d="M2.273 9.53a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.547Zm9.467-4.984a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546M7.4 13.108a5.54 5.54 0 0 1-3.775-2.88 3.27 3.27 0 0 1-1.944.24 7.4 7.4 0 0 0 5.328 4.465c.53.113 1.072.169 1.614.166a3.25 3.25 0 0 1-.666-1.9 6 6 0 0 1-.557-.091m3.828 2.285a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546m3.163-3.108a7.44 7.44 0 0 0 .373-8.726 3.3 3.3 0 0 1-1.278 1.498 5.57 5.57 0 0 1-.183 5.535 3.26 3.26 0 0 1 1.088 1.693M2.098 3.998a3.3 3.3 0 0 1 1.897.486 5.54 5.54 0 0 1 4.464-2.388c.037-.67.277-1.313.69-1.843a7.47 7.47 0 0 0-7.051 3.745">
                    </svg>
                    <div class="flex flex-col">
                        <h3 class="font-medium" aria-hidden="true">Linux</h3>
                        <small id="linuxDescription">Ubuntu 20.04 and higher</small>
                    </div>
                </label>
            </div> --}}

            {{-- <div class="flex flex-col gap-2">
                <div class="flex items-center justify-start gap-2 font-medium text-on-surface has-disabled:opacity-75 dark:text-on-surface-dark">
                    <input id="radioMac" type="radio" class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-outline bg-surface-alt before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-on-primary checked:border-primary checked:bg-primary checked:before:visible focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-primary disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark-alt dark:before:bg-on-primary-dark dark:checked:border-primary-dark dark:checked:bg-primary-dark dark:focus:outline-outline-dark-strong dark:checked:focus:outline-primary-dark" name="radioDefault" value="" checked >
                    <label for="radioMac" class="text-sm">Mac</label>
                </div>
                <div class="flex items-center justify-start gap-2 font-medium text-on-surface has-disabled:opacity-75 dark:text-on-surface-dark">
                    <input id="radioWindows" type="radio" class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-outline bg-surface-alt before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-on-primary checked:border-primary checked:bg-primary checked:before:visible focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-primary disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark-alt dark:before:bg-on-primary-dark dark:checked:border-primary-dark dark:checked:bg-primary-dark dark:focus:outline-outline-dark-strong dark:checked:focus:outline-primary-dark" name="radioDefault" value="">
                    <label for="radioWindows" class="text-sm">Windows</label>
                </div>
                <div class="flex items-center justify-start gap-2 font-medium text-on-surface has-disabled:opacity-75 dark:text-on-surface-dark">
                    <input id="radioLinux" type="radio" class="before:content[''] relative h-4 w-4 appearance-none rounded-full border border-outline bg-surface-alt before:invisible before:absolute before:left-1/2 before:top-1/2 before:h-1.5 before:w-1.5 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-on-primary checked:border-primary checked:bg-primary checked:before:visible focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-primary disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark-alt dark:before:bg-on-primary-dark dark:checked:border-primary-dark dark:checked:bg-primary-dark dark:focus:outline-outline-dark-strong dark:checked:focus:outline-primary-dark" name="radioDefault" value="">
                    <label for="radioLinux" class="text-sm">Linux</label>
                </div>
            </div> --}}
            


            <!-- ========== End radio ========== -->
            
            

<!-- ========== Start checkbox ========== -->
{{-- <div class="flex flex-col items-start">
    <label for="checkboxDefault" class="flex items-center gap-2 text-sm font-medium text-on-surface dark:text-on-surface-dark has-checked:text-on-surface-strong dark:has-checked:text-on-surface-dark-strong has-disabled:opacity-75 has-disabled:cursor-not-allowed">
        <div class="relative flex items-center">
            <input id="checkboxDefault" type="checkbox" class="before:content[''] peer relative size-4 appearance-none overflow-hidden rounded-sm border border-outline bg-surface-alt before:absolute before:inset-0 checked:border-primary checked:before:bg-primary focus:outline-2 focus:outline-offset-2 focus:outline-outline-strong checked:focus:outline-primary active:outline-offset-0 disabled:cursor-not-allowed dark:border-outline-dark dark:bg-surface-dark-alt dark:checked:border-primary-dark dark:checked:before:bg-primary-dark dark:focus:outline-outline-dark-strong dark:checked:focus:outline-primary-dark" aria-describedby="checkboxDescription" checked/>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="4" class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-on-primary peer-checked:visible dark:text-on-primary-dark">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
            </svg>
        </div>
        <span>Email Updates</span>
    </label>
    <span id="checkboxDescription" class="ml-6 text-sm text-on-surface dark:text-on-surface-dark">You only gonna get good news, promise.</span>
</div> --}}

<!-- ========== End checkbox ========== -->

<!-- ========== Start loading ========== -->
{{-- <button type="button" class="inline-flex items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-5 animate-spin motion-reduce:animate-none fill-on-primary dark:fill-on-primary-dark" >
        <path opacity="0.25" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" />
        <path d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
    </svg>
    Loading
</button> --}}
<!-- ========== End loading ========== -->


<!-- ========== Start tooltips ========== -->
{{-- <div class="relative w-fit">
    <button type="button" class="peer rounded-radius bg-surface-alt border border-surface-alt px-4 py-2 font-medium tracking-wide text-on-surface focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary dark:bg-surface-dark-alt dark:border-surface-dark-alt dark:text-on-surface-dark dark:focus-visible:outline-primary-dark" aria-describedby="tooltipExample">Hover Me</button>
    <div id="tooltipExample" class="pointer-events-none absolute bottom-full mb-2 left-1/2 -translate-x-1/2 z-10 flex w-64 flex-col gap-1 rounded-sm bg-surface-dark p-2.5 text-xs text-on-surface-dark opacity-0 transition-all ease-out peer-hover:opacity-100 peer-focus:opacity-100 dark:bg-surface dark:text-on-surface" role="tooltip">
        <span class="text-sm font-medium text-on-surface-dark-strong dark:text-on-surface-strong">Tooltip top</span>
        <p class="text-balance">A rich tooltip that contains longer text and is usually used to add a description.</p>
    </div>
</div> --}}

<!-- ========== End tooltips ========== -->

<!-- ========== Start step ========== -->
{{-- <ol class="flex w-min flex-col gap-14" aria-label="registration progress">
	<!-- completed step -->
	<li class="text-sm" aria-label="create an account">
		<div class="flex items-center gap-2">
			<span class="flex size-6 items-center justify-center rounded-full border border-primary bg-primary text-on-primary dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark">
				<svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>
				</svg>
				<span class="sr-only">completed</span>
			</span>
			<span class="hidden w-max text-primary dark:text-primary-dark sm:inline">Create an account</span>
		</div>
	</li>
	<!-- current step -->
	<li class="flex w-full items-center text-sm" aria-current="step" aria-label="choose a plan">
		<div class="flex items-center gap-2">
			<div class="relative">
				<div class="absolute bottom-8 left-3 h-10 w-0.5 bg-primary dark:bg-primary-dark"></div>
				<span class="flex size-6 shrink-0 items-center justify-center rounded-full border border-primary bg-primary font-bold text-on-primary outline outline-2 outline-offset-2 outline-primary dark:border-primary-dark dark:bg-primary-dark dark:text-on-primary-dark dark:outline-primary-dark">2</span>
			</div>
			<span class="hidden w-max font-bold text-primary dark:text-primary-dark sm:inline">Select a plan</span>
		</div>
	</li>
	<li class="flex w-full items-center text-sm" aria-label="checkout">
		<div class="flex items-center gap-2">
			<div class="relative">
				<div class="absolute bottom-8 left-3 h-10 w-0.5 bg-outline dark:bg-outline-dark"></div>
				<span class="flex size-6 shrink-0 items-center justify-center rounded-full border border-outline bg-surface-alt font-medium text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">3</span>
			</div>
			<span class="hidden w-max text-on-surface dark:text-on-surface-dark sm:inline">Checkout</span>
		</div>
	</li>
	<li class="flex w-full items-center text-sm" aria-label="get started">
		<div class="flex items-center gap-2">
			<div class="relative">
				<div class="absolute bottom-8 left-3 h-10 w-0.5 bg-outline dark:bg-outline-dark"></div>
				<span class="flex size-6 shrink-0 items-center justify-center rounded-full border border-outline bg-surface-alt font-medium text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">4</span>
			</div>
			<span class="hidden w-max text-on-surface dark:text-on-surface-dark sm:inline">Get started</span>
		</div>
	</li>
</ol> --}}

<!-- ========== End step ========== -->

<!-- ========== Start spinner ========== -->

{{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="size-5 fill-on-surface motion-safe:animate-spin dark:fill-on-surface-dark">
    <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity=".25" />
    <path d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
</svg> --}}

<!-- ========== End spinner ========== -->

<!-- ========== Start modal ========== -->

{{-- <div x-data="{videoModalIsOpen: false}">
    <button x-on:click="videoModalIsOpen = true, $refs.video.play()" type="button" class="inline-flex items-center gap-2 whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"  class="w-4 h-4">
            <path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z" clip-rule="evenodd"/>
        </svg>
        Play Video
    </button>
    <div x-cloak x-show="videoModalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="videoModalIsOpen" x-on:keydown.esc.window="videoModalIsOpen = false, $refs.video.pause()" x-on:click.self="videoModalIsOpen = false, $refs.video.pause()" class="fixed inset-0 z-30 flex items-center justify-center bg-black/20 p-4 backdrop-blur-md lg:p-8" role="dialog" aria-modal="true" aria-labelledby="videoModalTitle">
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

<div x-data="{modalIsOpen: false}">
    <button x-on:click="modalIsOpen = true" type="button" class="whitespace-nowrap rounded-radius border border-primary dark:border-primary-dark bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Open Modal</button>
    <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen" x-on:keydown.esc.window="modalIsOpen = false" x-on:click.self="modalIsOpen = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-xs sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
        <!-- Modal Dialog -->
        <div x-show="modalIsOpen" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-radius border border-outline bg-surface text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
            <!-- Dialog Header -->
            <div class="flex items-center justify-between border-b border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20">
                <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-on-surface-strong dark:text-on-surface-dark-strong">Special Offer</h3>
                <button x-on:click="modalIsOpen = false" aria-label="close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <!-- Dialog Body -->
            <div class="px-4 py-8"> 
                <p>As a token of appreciation, we have an exclusive offer just for you. Upgrade your account now to unlock premium features and enjoy a seamless experience.</p>
            </div>
            <!-- Dialog Footer -->
            <div class="flex flex-col-reverse justify-between gap-2 border-t border-outline bg-surface-alt/60 p-4 dark:border-outline-dark dark:bg-surface-dark/20 sm:flex-row sm:items-center md:justify-end">
                <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-radius px-4 py-2 text-center text-sm font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:text-on-surface-dark dark:focus-visible:outline-primary-dark">Remind me later</button>
                <button x-on:click="modalIsOpen = false" type="button" class="whitespace-nowrap rounded-radius border border-primary dark:border-primary-dark bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">Upgrade Now</button>
            </div>
        </div>
    </div>
</div> --}}

<!-- ========== End modal ========== -->

<!-- ========== Start drawer ========== -->
{{-- <div x-data="{ sidebarIsOpen: false }" x-on:click.outside="sidebarIsOpen = false" x-on:keydown.esc.window="sidebarIsOpen = false">
    <!-- toggle button -->
    <button class="fixed bottom-4 right-4 z-10 rounded-full bg-primary p-4 text-on-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark" x-on:click="sidebarIsOpen = ! sidebarIsOpen">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.5" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"/>
        </svg>
        <span class="sr-only">sidenav toggle</span>
    </button>

    <nav x-cloak x-show="sidebarIsOpen" x-trap="sidebarIsOpen" class="fixed right-0 z-20 flex h-svh w-80 shrink-0 flex-col border-l border-outline bg-surface-alt p-4 transition-transform duration-300 dark:border-outline-dark dark:bg-surface-dark-alt" aria-label="shopping cart" x-transition:enter="transition duration-200 ease-out" x-transition:enter-end="translate-x-0" x-transition:enter-start=" translate-x-80" x-transition:leave="transition ease-in duration-200 " x-transition:leave-end="translate-x-80" x-transition:leave-start="translate-x-0">
        <!-- sidebar header -->
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-medium text-on-surface-strong dark:text-on-surface-dark-strong">Your Cart</h3>
            <button class="text-on-surface dark:text-on-surface-dark" x-on:click="sidebarIsOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.5" class="size-6" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                </svg>
                <span class="sr-only">close sidebar</span>
            </button>
        </div>

        <!-- menu items -->
        <div class="flex flex-col gap-2 overflow-y-auto py-4">
            <!-- products -->
            <div class="flex flex-col divide-y divide-outline dark:divide-outline-dark">
                <!-- product card -->
                <div class="flex justify-between gap-4 py-4">
                    <img src="https://res.cloudinary.com/ds8pgw1pf/image/upload/v1730561465/penguinui/component-assets/products/BeatsStudioPro.webp" class="size-20 object-cover rounded-radius" alt="Beats Studio Pro"/>
                    <div class="mr-auto flex flex-col gap-2">
                        <p class="text-sm font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Beats Studio Pro</p>
                        <p class="text-xs leading-4 text-on-surface dark:text-on-surface-dark">Color: Black</p>
                        <!-- counter -->
                        <div class="mt-auto flex flex-col gap-1">
                            <label for="counterInput1" class="sr-only">quantity</label>
                            <div class="flex items-center">
                                <button type="button" class="flex h-6 items-center justify-center border border-outline rounded-l-radius bg-surface-alt px-2 py-2 text-on-surface hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark dark:focus-visible:outline-primary-dark" aria-label="subtract">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                                    </svg>
                                </button>

                                <input id="counterInput1" type="text" class="border-x-none h-6 w-10 border-outline bg-surface-alt/50 text-center text-on-surface-strong focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-primary dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:text-on-surface-dark-strong dark:focus-visible:outline-primary-dark border-y" value="1" readonly/>

                                <button type="button" class="flex h-6 items-center justify-center border-outline rounded-r-radius bg-surface-alt px-2 py-2 text-on-surface hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark dark:focus-visible:outline-primary-dark border" aria-label="add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="sr-only">item price</span>
                        <p class="text-sm font-bold text-on-surface dark:text-on-surface-dark">$169</p>
                    </div>
                </div>

                <!-- product card -->
                <div class="flex justify-between gap-4 py-4">
                    <img src="https://res.cloudinary.com/ds8pgw1pf/image/upload/v1730561465/penguinui/component-assets/products/PS5Pro.webp" class="size-20 object-cover rounded-radius" alt="Playstation 5 Pro"/>
                    <div class="mr-auto flex flex-col gap-2">
                        <p class="text-sm font-bold leading-4 text-on-surface-strong dark:text-on-surface-dark-strong">Playstation 5 Pro</p>
                        <p class="text-xs leading-4 text-on-surface dark:text-on-surface-dark">Strorage: 2TB</p>
                        <!-- counter -->
                        <div class="mt-auto flex flex-col gap-1">
                            <label for="counterInput2" class="sr-only">quantity</label>
                            <div class="flex items-center">
                                <button type="button" class="flex h-6 items-center justify-center border border-outline rounded-l-radius bg-surface-alt px-2 py-2 text-on-surface hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark dark:focus-visible:outline-primary-dark" aria-label="subtract">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                                    </svg>
                                </button>

                                <input id="counterInput2" type="text" class="border-x-none h-6 w-10 border-outline bg-surface-alt/50 text-center text-on-surface-strong focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-primary dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:text-on-surface-dark-strong dark:focus-visible:outline-primary-dark border-y" value="1" readonly/>

                                <button type="button" class="flex h-6 items-center justify-center border-outline rounded-r-radius bg-surface-alt px-2 py-2 text-on-surface hover:opacity-75 focus-visible:z-10 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark dark:focus-visible:outline-primary-dark border" aria-label="add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" class="size-4" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <span class="sr-only">item price</span>
                        <p class="text-sm font-bold text-on-surface dark:text-on-surface-dark">$699</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar footer -->
        <div class="mt-auto">
            <div class="divide-y divide-outline dark:divide-outline-dark" >
                <div class="flex items-center justify-between py-2 text-xs font-medium text-on-surface dark:text-on-surface-dark">
                    <span>Sub total</span>
                    <span>$868</span>
                </div>
                <div class="flex items-center justify-between py-2 text-xs font-medium text-on-surface dark:text-on-surface-dark">
                    <span>Tax</span>
                    <span>$56</span>
                </div>
                <div class="flex items-center justify-between py-2 text-sm font-bold text-on-surface dark:text-on-surface-dark">
                    <span>Total</span>
                    <span>$924</span>
                </div>
            </div>
            <div>
                <button type="button" class="mt-2 flex w-full rounded-radius border border-primary dark:border-primary-dark items-center justify-center gap-2 whitespace-nowrap bg-primary px-4 py-2 text-center text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
                    <span>Checkout</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2" class="size-4" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </button>
                <button type="button" class="mt-2 flex w-full rounded-radius border border-black dark:border-white items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-white transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:cursor-not-allowed disabled:opacity-75 dark:bg-white dark:text-black dark:focus-visible:outline-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4" aria-hidden="true">
                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                        <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                    </svg>
                    <span class="sr-only">Pay with apple</span>
                    <span>Pay</span>
                </button>
            </div>
        </div>
    </nav>
</div>

<!-- page content -->
<div class="p-8 min-h-svh bg-surface dark:bg-surface-dark">
    <div>
    <!-- content goes here -->
    </div>
</div>
 --}}

<!-- ========== End drawer ========== -->


<!-- ========== Start coockie ========== -->
{{-- <div class="flex max-w-sm flex-col gap-4 border-outline bg-surface-alt/50 text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:text-on-surface-dark rounded-radius border">
    <!-- Header -->
    <div class="flex items-center justify-between border-b border-outline bg-surface-alt/60 px-4 py-2 dark:border-outline-dark dark:bg-surface-dark-alt/20">
        <h3 class="flex items-center gap-2 font-semibold text-on-surface-strong dark:text-on-surface-dark-strong">
            <span class="text-3xl" aria-hidden="true">🍪</span>
            Cookie Time!
        </h3>
    </div>

    <!-- Body -->
    <div class="px-4 text-sm">
        <p class="text-pretty">
            We use cookies to make your experience sweet and crispy. For more information, please read our <a href="#" class="cursor-pointer font-medium text-primary underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">Privacy Policy</a>
        </p>
    </div>

    <!-- Footer -->
    <div class="flex flex-col-reverse justify-end gap-2 border-t border-outline bg-surface-alt/60 px-4 py-2 sm:flex-row sm:items-center dark:border-outline-dark dark:bg-surface-dark/20">
        <button type="button" class="cursor-pointer whitespace-nowrap p-2 text-center text-xs font-medium tracking-wide text-on-surface transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:text-on-surface-dark dark:focus-visible:outline-primary-dark rounded-radius">No, thank you</button>
        <button type="button" class="cursor-pointer whitespace-nowrap bg-primary px-4 py-2 border border-primary text-center text-xs font-medium tracking-wide text-on-primary transition hover:opacity-75 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 dark:bg-primary-dark dark:text-on-primary-dark dark:border-primary-dark dark:focus-visible:outline-primary-dark rounded-radius">Sounds Good!</button>
    </div>
</div> --}}
<!-- ========== End coockie ========== -->
