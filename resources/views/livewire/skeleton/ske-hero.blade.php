@props(['hero', 'section'])
<div class="w-full max-w-screen ">
    <div role="status" class=" animate-pulse">
        @if ($hero)
        <div class=" w-full max-w-screen-lg mx-auto h-full flex-fill">
            <div class=" h-[460px] space-y-8 mb-12 flex flex-col justify-center items-center mt-16">
                <span class=" h-16 w-14 text-center -mb-6 mt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" class="size-10 fill-on-surface motion-safe:animate-spin dark:fill-on-surface-dark">
                        <path d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity=".25" />
                        <path d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
                    </svg>
                </span>
                <span class=" h-14 w-3/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-6"></span>
                <span class=" h-2 w-3/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-6"></span>
                <span class=" h-2 w-2/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-4"></span>

                <span class=" h-10 w-2/6 bg-gray-300 rounded-xl dark:bg-zinc-900  mb-12 mt-4"></span>
            </div>
        </div>

        @elseif ($section)
            <div class="h-56 bg-gray-200 rounded-xl dark:bg-zinc-900 w-full mb-6"></div>
            <div class="h-28 bg-gray-200 rounded-xl dark:bg-zinc-900 w-1/2 mb-8 mx-auto"></div>
        @endif
    </div>
</div>
