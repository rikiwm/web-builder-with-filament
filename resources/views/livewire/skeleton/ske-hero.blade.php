@props(['hero', 'section'])
<div class="w-full max-w-screen ">
    <div role="status" class=" animate-pulse">
        @if ($hero)
        <div class="relative w-full h-full">
            <div class=" h-[460px] bg-gray-200 rounded-xl rounded-b-none dark:bg-black w-full mb-6 flex flex-col justify-center items-center">
            <span class=" h-16 w-14 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-4 mt-10"></span>
            <span class=" h-4 w-1/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-8"></span>
            <span class=" h-14 w-4/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-6"></span>
            <span class=" h-14 w-2/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-6"></span>
            <span class=" h-2 w-3/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-6"></span>
            <span class=" h-2 w-2/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-4"></span>
            <span class=" h-16 w-2/6 bg-gray-300 rounded-full dark:bg-zinc-900  mb-0 mt-4"></span>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 my-12 max-w-screen-xl mx-auto">
                {{-- <div class=" h-[360px] bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div> --}}
                <div class="col-span-3 h-[360px] bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
            </div>
        </div>

        @elseif ($section)
            <div class="h-56 bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
            <div class="h-28 bg-gray-200 rounded-xl dark:bg-zinc-900 w-1/2 mb-8 mx-auto"></div>
        @endif
    </div>
</div>
