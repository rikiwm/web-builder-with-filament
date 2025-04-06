<x-layouts.guest class="">
    <div class="lg:py-0 py-2  text-black/50 dark:text-white/50">
        <div class=" min-h-screen
        justify-center selection:bg-[#03A56A] selection:text-white">
            <div class=" w-full px-2 md:px-6 ">
                <main class="py-12">

                    <div class="py-0 md:py-4 w-full max-w-screen-2xl mx-auto">

                        <div
                            class="flex justify-center items-center border bg-zinc-200/90 dark:bg-zinc-800/80 w-full h-52 lg:h-64 border-gray-200/20 dark:border-zinc-900 rounded-[14px] p-0 md:p-2  px-4">
                            <div class="">
                                <h1
                                    class="mb-2 text-3xl font-extrabold text-black dark:text-white md:text-2xl lg:text-5xl text-center">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r to-gray-500 from-sky-950 dark:text-white/50">{{ $title ?? '-' }}</span>
                                </h1>
                            </div>

                        </div>
                        <div
                        class="flex justify-center items-center border bg-white w-3/4 h-22 lg:h-32 mx-auto border-b-teal-200/30 border-gray-200/20 dark:border-zinc-950 dark:bg-black rounded-[14px] p-0 md:p-2 mb-2 px-4 -mt-12 md:-mt-20">
                            <div class="py-4 ">
                                <h1
                                    class="mb-1 text-xl font-extrabold text-black dark:text-white md:text-xl lg:text-2xl text-center">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r to-sky-900 from-sky-950 dark:text-white">{{ $title }}</span>
                                </h1>
                                <p
                                    class="mb-2 text-xs font-extrabold text-sky-950 dark:text-white md:text-lg lg:text-lg text-center">
                                    {{ $title }} Kota Padang</span>
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
