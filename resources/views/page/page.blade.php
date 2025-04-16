@if ($type === 'more')
    dd(1);
@endif
<x-layouts.guest class="">
    <div class="lg:py-0 py-2  text-black/50 dark:text-white/50">
        <div class=" min-h-screen
        justify-center selection:bg-[#03A56A] selection:text-white">
            <div class=" w-full px-2 md:px-6 ">
                <main class="py-12">

                    <div class="py-2 md:py-4 w-full max-w-screen-2xl mx-auto">
                        <div class="mb-4 flex flex-col justify-center items-center border bg-zinc-300 dark:bg-zinc-800/80 w-full h-52 lg:h-64 border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2  px-4">
                            <div class="flex justify-center items-center space-x-4">
                         
                               @if($category == 'Pokja')
                                <img src="{{ asset('frontend/pkk.png') }}" class="size-6 lg:size-10  rounded-full object-cover" alt="avatar"/>
                                @endif
                                <h1
                                    class="mb-2 text-3xl font-semibold text-gray-50 dark:text-zinc-950 md:text-2xl lg:text-5xl text-center uppercase">
                                        {{ $title ?? '-' }}
                                </h1>
                       
                            </div>
                            <x-breadcumb.breadcumb class="justify-center">
                                <li class="flex items-center gap-2">
                                    <a href="/" class="hover:text-gray-700 text-gray-400/80 dark:hover:text-gray-200" wire:navigate>Home</a>
                                    <span aria-hidden="true">/</span>
                                </li>
                               
                                <li class="text-gray-400 dark:text-on-surface-dark-strong capitalize" aria-current="page">{{  Str::limit($title, 24, preserveWords: true); }}</li>
                        </x-breadcumb.breadcumb>
                        </div>
                        <div class="mb-4 flex justify-center items-center border bg-white w-3/4 h-22 lg:min-h-fit mx-auto border-b-teal-200/30 border-gray-200/20 dark:border-zinc-950 dark:bg-black rounded-[14px] p-0 md:p-2 mb-2 px-4 -mt-12 md:-mt-20">
                            <div class="py-4 lg:py-4 ">
                                <h1
                                    class=" mb-2 text-xl font-light text-zinc-200/90 dark:text-white md:text-xl lg:text-2xl text-center">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-b to-sky-900 from-zinc-200 dark:text-white">{{ $title }}</span>
                                </h1>
                                <p
                                    class="mb-2 text-xs font-ligjt text-sky-950/50 dark:text-white md:text-sm lg:text-sm text-center capitalize">
                                    {{-- @if ($data['updated_at'] != null)
                                        Di Update :
                                    @else
                                        Created :
                                    @endif --}}
                                    {{-- {{ $data['updated_at']->locale('id')->diffForHumans() ?? $data['created_at']->locale('id')->diffForHumans() }}  --}}
                                </span>
                                </p>
                            </div>
                         </div>
                    </div>
                
                    @if ($data != null)
                    <livewire:page.page-controller :title="$title" :data="$data" class=""/>
                    @endif
                </main>
            </div>
        </div>
    </div>

</x-layouts.guest>
