@props(['title' => '', 'data' => '', 'url' => $currentUrl ?? null ])
@php
$img = array_filter($data['content'], fn($content) => $content['type'] === 'image');
$img = array_map(function ($content) {
    return [
        'type' => $content['type'],
        'data' => [
            'content' => url('storage/' . ($content['data']['content'] ?? 'default.jpg')),
        ],
    ];
}, $img);
$img = array_values($img);
@endphp
<x-layouts.guest class="">
    <div class="py-2 text-black/50 dark:text-white/50">
        <div class=" min-h-screen
        justify-center selection:bg-[#03A56A] selection:text-white">
            <div class=" w-full px-6 ">
                <main class="py-12">
                    <x-page.section-page>
                    <x-slot name="content">
                        <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto">
                            <div class="flex flex-col justify-center items-center border bg-zinc-200/90 dark:bg-zinc-800/80 w-full h-32 lg:h-44 border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2 py-4 px-4 ">
                            
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
                            <div class="flex justify-center items-center bg-white w-4/5 lg:w-3/4 h-22 lg:h-28 mx-auto border-b-teal-200/30 border-gray-200/20 dark:border-zinc-950 dark:bg-black rounded-[14px] 
                            p-0 md:p-2 mb-2 px-4 -mt-1 md:-mt-16  shadow-sm">
                                <div class="py-4 flex justify-center space-x-2">
                                    <x-application-logo class="size-4 lg:size-9 opacity-60" />
                                    <h1
                                    class="mb-2 text-xl font-semibold text-black dark:text-white md:text-2xl lg:text-5xl text-center line-clamp-1">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r to-gray-500 from-sky-950 dark:text-white/50">{{ $title }}</span>
                                </h1>
                                </div>
                            </div>
                   
                            <div x-data="{ selectedTab: '0' }" class="grid lg:grid-cols-4 grid-cols-1 py-4">
                                <ul x-on:keydown.right.prevent="$focus.wrap().next()" 
                                    x-on:keydown.left.prevent="$focus.wrap().previous()"
                                    class="lg:col-span-1 space-y space-y-4 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0"
                                    role="tablist" 
                                    aria-label="tab options">
                                    @foreach ($data['content'] as $key => $item)
                                        @if ($item['type'] === 'heading')
                                            <a 
                                                x-on:click="selectedTab = '{{ $key }}'" 
                                                x-bind:aria-selected="selectedTab === '{{ $key }}'" 
                                                x-bind:tabindex="selectedTab === '{{ $key }}' ? '0' : '-1'" 
                                                x-bind:class="selectedTab === '{{ $key }}' ? 'font-bold text-white border-r-2 border-zinc-500 dark:border-zinc-800 dark:text-zinc-50 bg-zinc-500' : 'bg-zinc-200 text-zinc-600 font-medium dark:text-zinc-700 dark:hover:border-r-zinc-500 dark:hover:text-on-surface-dark-strong hover:border-r-2 hover:border-r-outline-strong hover:text-on-surface-strong'" 
                                                class="inline-flex items-center px-4 py-3 rounded-lg w-full uppercase "
                                                type="button" 
                                                role="tab" 
                                                aria-controls="tabpanel{{ $key }}">
                                                <svg class="w-4 h-4 me-2 text-zinc-950 dark:text-zinc-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                                                </svg>
                                                {{ $item['data']['title'] }}
                                            </a>
                                        
                                        @endif
                                    @endforeach
                                </ul>
                            
                                <div class="lg:col-span-3 col-span-3">
                                    @foreach ($data['content'] as $key => $item)
                                        @if ($item['type'] === 'paragraph')
                                        <div class="p-6 bg-gradient-to-t to-zinc-50 dark:to-zinc-950 from-transparent text-medium text-gray-500 dark:text-gray-400 dark:bg-zinc-800 rounded-xl w-full"
                                            x-cloak 
                                            x-show="selectedTab === '{{  $key - 1 }}'" 
                                            id="tabpanel{{ $key - 1 }}" 
                                            role="tabpanel" 
                                            aria-label="{{ $key - 1 }}">
                                            <x-content-paragraph :content="$item['data']['content'] ?? ''" />
                                        </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div> 
                        </div>
                    </x-slot>
                </x-page.section-page>
            
                </main>
            </div>
        </div>
    </div>
</x-layouts.guest>