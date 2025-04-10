@props(['url' => $title ?? null ])

<x-layouts.guest class="">

    <div class="py-4 text-black/50 dark:text-white/50">
        <div class=" min-h-screen mt-12 lg:mt-0
        selection:bg-[#03A56A] selection:text-white">
            <div class=" w-full px-4 ">
                <main class="py-12">
                    
                    <x-breadcumb.breadcumb>
                        <x-slot name="content">
                            <li class="flex items-center gap-2">
                                <a href="/" class="hover:text-on-surface-strong dark:hover:text-on-surface-dark-strong" wire:navigate>Home</a>
                                <span aria-hidden="true">/</span>
                            </li>
                           
                            <li class="text-on-surface-strong font-bold dark:text-on-surface-dark-strong capitalize" aria-current="page">{{  Str::limit($title, 12, preserveWords: true); }}</li>
                        </x-slot>
                    </x-breadcumb.breadcumb>

                    <x-page.section-slide>
                        <x-slot name=slider>
                            <div class="py-2 md:py-0 w-full max-w-screen-2xl mx-auto ">
                                @if(isset($data) && $title != 'download')   
                                <div
                                    class="w-full p-0 md:p-2 mb-2 px-4">
                                    <div class="swiper mySwiper rounded-xl relative w-full" >
                                        <div class="swiper-wrapper  h-56  rounded-lg md:h-96">
                                            @forelse ($data->take(3) as $dt)
                                            <div class="swiper-slide  text-white">
                                                @isset($dt->image)
                                                    <img src="{{ url('storage/' . $dt->image)}}" loading="lazy"
                                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover " alt="asd">
                                                @else
                                                <img src="{{ asset('frontend/balaikota-darks.webp')}}" loading="lazy"
                                                class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover " alt="asd">
                                                @endisset
                                             
                                                <div class="absolute inset-0 bg-gradient-to-t from-surface-strong to-transparent items-center justify-start flex ">
                                                    <div class="flex flex-col  justify-start items-start p-6 sm:p-10 bg-transparent backdrop-blur-lg bg-zinc-600/50 rounded-lg sm:h-full sm:w-1/3">
                                                        <small class="mb-4 font-medium bg-slate-400/30 rounded-md py-1 px-2">{{ $dt->categori->name }}</small>
                                                        <h3 class="text-balance text-xl font-bold text-on-surface-strong lg:text-2xl dark:text-on-surface-dark-strong" aria-describedby="articleDescription">
                                                            {{ $dt->title }}
                                                        </h3>
                                                        <p class="my-4 max-w-lg text-pretty text-sm line">
                                                            @isset($dt->content)
                                                                @forelse ($dt['content'] as $item)
                                                                @if ($item['type'] === 'paragraph')
                                                                    {!! Str::limit($item['data']['content'], 120, preserveWords: true) !!}
                                                                @endif
                                                                @empty      
                                                                @endforelse      
                                                            @endisset
                                                        </p>
                                                        <a href="{{ route('post.detail', $dt->slug) }}" class="w-fit font-medium text-zinc-100 underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">
                                                            Read full
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" aria-hidden="true" class="inline size-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                                
                                            @endforelse
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                                @endisset
                            </div>
                            </div>
                        </x-slot>
                    </x-page.section-slide>
                    @if(isset($title) && $title != 'download')
                    <livewire:list.list-controller :title="$title" datacount="{{ count($data) ?? 0 }}" model_view="{{ $model_view ?? 'asd' }}" />
                     
                    @else
                    <livewire:list.doc-view :title="$title" datacount="{{ count($data) ?? 0 }}" model_view="{{ $model_view ?? 'asd' }}" />
                    @endif
                </main>
            </div>
        </div>
    </div>

</x-layouts.guest>
