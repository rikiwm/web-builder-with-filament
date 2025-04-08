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

                    {{-- <x-page.section-slide>
                        <x-slot name=slider>
                            <div class="py-2 md:py-0 w-full max-w-screen-2xl mx-auto ">
                                <div
                                    class="w-full p-0 md:p-2 mb-2 px-4">
                                    <div class="swiper mySwiper rounded-xl relative w-full" >
                                        <div class="swiper-wrapper  h-56  rounded-lg md:h-96">
                                            <div class="swiper-slide  text-white text-center">
                                                  <img src="{{ asset('frontend/bg-toska.jpg') }}" loading="lazy"
                                                    class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover bg-gray-400 bg-blend-overlay saturate-0 hover:saturate-50" alt="asd">
                                            </div>
                                            <div class="swiper-slide  text-white text-center">
                                                <img src="{{ asset('frontend/bg-toska.jpg') }}" loading="lazy"
                                                class="relative block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-cover bg-gray-400 bg-blend-overlay saturate-0 hover:saturate-50" alt="asd">

                                          </div>
                                        </div>

                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </x-slot>
                    </x-page.section-slide> --}}
                    <livewire:list.list-controller :title="$title" :dataobject="collect($data)" model_view="{{ $model_view ?? 'asd' }}" />
                </main>
            </div>
        </div>
    </div>

</x-layouts.guest>
