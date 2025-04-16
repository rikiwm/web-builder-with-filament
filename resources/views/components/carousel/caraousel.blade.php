@props(['img','content'=>'','hero'=>''])
@php
  if (isset($hero['value'])) {
    $img = array_filter($hero['value'], function (array $value): bool {
        $d = $value['type'] === 'image';
        return $d;
    }, ARRAY_FILTER_USE_BOTH);
    $img = array_map(function (array $value): array {
        return [
            'type' => $value['type'],
            'data' => [
                'images' => url('storage/' . $value['data']['images'] ?? 'Padang'),
            ],
        ];
    }, $img);
    $img = array_values($img);
  }
@endphp
<div x-data="{
    autoplayIntervalTime: 8000,
    slides: [
        @foreach ($img as $item)
            {
                imgSrc: '{{ $item['data']['images'] }}',
                imgAlt: '{{ $loop->iteration }}',
            },
        @endforeach
    ],
    currentSlideIndex: 1,
    isPaused: false,
    autoplayInterval: null,
    previous() {                
        if (this.currentSlideIndex > 1) {                    
            this.currentSlideIndex = this.currentSlideIndex - 1                
        } else {   
            // If it's the first slide, go to the last slide           
            this.currentSlideIndex = this.slides.length                
        }            
    },            
    next() {                
        if (this.currentSlideIndex < this.slides.length) {                    
            this.currentSlideIndex = this.currentSlideIndex + 1                
        } else {                 
            // If it's the last slide, go to the first slide    
            this.currentSlideIndex = 1                
        }            
    },    
    autoplay() {
        this.autoplayInterval = setInterval(() => {
            if (! this.isPaused) {
                this.next()
            }
        }, this.autoplayIntervalTime)
    },
    setAutoplayInterval(newIntervalTime) {
        clearInterval(this.autoplayInterval)
        this.autoplayIntervalTime = newIntervalTime
        this.autoplay()
    },    
    }"
    x-init="autoplay" 
    class="relative w-full overflow-hidden">
    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[86svh] w-full py-1">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                <img class="absolute w-full h-full inset-0 object-cover rounded-xl rounded-t-3xl text-on-surface dark:text-on-surface-dark" 
                x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
        
    </div>
    
    <div class="absolute inset-0 top-28 bg-gradient-to-t from-surface-dark/95 to-transparent">
        <div class="mt-8 lg:mt-8 mx-auto py-6 lg:py-12 space-y-1">
            <img class="size-16 mx-auto mb-2 transform transition duration-500 hover:scale-110 opacity-90 "
                src="{{ asset('frontend/pdg.png') }}"
                alt="logo">
          
            <h1
                class="w-10/12 text-center mx-auto mb-4 text-4xl  tracking-tight leading-none text-white md:text-5xl uppercase
            lg:text-6xl mt-2
            lg:mt-2">
                <span class="text-transparent bg-clip-text bg-gradient-to-t to-zinc-50 font-bold text-balance  
                from-gray-300 dark:to-gray-500 dark:from-yellow-50 ">
                    {{  $hero['value'][0]['data']['desc'] ?? 'Padang' }}
                </span>
            </h1>
            <p
            class=" text-center text-xl font-semibold text-zinc-50 lg:text-md sm:px-16 xl:px-48 dark:text-zinc-100 capitalize">
            {{  $hero['value'][1]['data']['content'] ?? 'Padang' }}</p>
            <p class="text-center text-sm font-normal text-zinc-50 ">
                {{  $hero['value'][1]['data']['sub_content'] ?? 'Padang jhjhh' }} 
            </p>
        </div>

        <div class="sm:flex-row sm:justify-center sm:space-y-0">
            <form class="w-1/2 max-w-md mx-auto ">
                <div class="relative rounded-xl">
                    <div class="text-center">
                        <livewire:search-content />
                        {{-- <x-btn.search-button class="py-2"
                        x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'test')"
                       >
                    </x-btn.search-button> --}}
                     </div>
                </div>
            </form>
            
        </div>

        {{-- <div class="py-1 space-x-2 sm:flex-row sm:justify-center sm:space-y-2 mb-0">
            @for ($i = 0; $i < 5; $i++)
            <kbd class="inline-block size-min whitespace-nowrap rounded-lg text-gray-900  px-2 py-1 mb-2 font-normal
                bg-white  focus:ring-green-500 focus:border-green-500 dark:bg-gray-700/30 dark:border dark:border-gray-500 text-black
                dark:text-green-50 dark:focus:ring-green-100 ease-in-out dark:transition-colors">
                <a href="https://padang.go.id/" class="text-zinc-500 hover:text-zinc-300">1 data</a>
            </kbd>    
            @endfor
        </div> --}}
                    
    </div>
    
    <!-- Pause/Play Button -->
    <button type="button" class="absolute bottom-5 right-5 z-20 rounded-full text-on-surface-dark opacity-50 transition hover:opacity-80 focus-visible:opacity-80 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-dark active:outline-offset-0" aria-label="pause carousel" x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)" x-bind:aria-pressed="isPaused">
        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd">
        </svg>
        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-7">
            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd">
        </svg>
    </button>
    
    <!-- indicators -->
    <div class="absolute rounded-radius bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayInterval(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-on-surface-dark' : 'bg-on-surface-dark/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>