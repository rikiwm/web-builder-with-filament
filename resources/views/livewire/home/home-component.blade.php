@props(['hero' =>'','welcome'=>''])
<div>
    <x-carousel.caraousel :content="$hero['value'][0]['data']['content'] ?? 'content'" :hero="$hero">
    </x-carousel.caraousel>
    <div class="py-4 px-4 w-full lg:max-w-screen-xl mx-auto text-center -mt-16 lg:-mt-0">
        <div class="lg:pb-20">
            <div class="mx-auto max-w-7xl   ">
                <div class="relative isolate overflow-hidden bg-gradient-to-t dark:bg-gradient-to-b to-white dark:to-zinc-950
                     from-transparent dark:from-zinc-400/40 px-6 pt-12
                     lg:pb-0 shadow-md rounded-xl lg:rounded-2xl sm:px-16 py-12 md:pt-16 lg:flex lg:gap-x-12 lg:px-12 justify-between items-top">
                    <svg viewBox="0 0 1024 1024"
                        class="absolute top-1/2 left-1/2 -z-10 size-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
                        aria-hidden="true">
                        <circle cx="512" cy="512" r="512"
                            fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
                        <defs>
                            <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="black" />
                            </radialGradient>
                        </defs>
                    </svg>
                    <div
                        class="mx-auto max-w-screen-2xl w-full text-center lg:mx-0 lg:flex-auto lg:py-10 lg:text-left">
                        <h2
                            class="text-xl font-semibold tracking-tight text-zinc-900 text-balance dark:text-white sm:text-4xl">
                           @isset($welcome['value']) {{  $welcome['value'][0]['data']['content'] ?? 'content' }} @endisset                            
                          </h2>
                        <p class="mt-6 text-sm lg:text-lg/6 text-pretty text-zinc-900 dark:text-gray-300">
                           @isset($welcome['value']) {{  $welcome['value'][0]['data']['sub_content'] ?? 'content' }} @endisset                            
                        </p>
                        <div class="mt-6 flex items-center justify-center gap-x-2 lg:justify-start">
                            <a href="#"
                                class="text-xs/4 font-semibold text-slate-700 dark:text-white">Selengkapnya
                                <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div
                        class=" max-w-screen-sm mt-8 lg:mt-8 lg:mx-0 mx-auto lg:flex lg:flex-col lg:py-2  size-32 ">
                        <!-- ========== Start img and name ========== -->
                        @isset($welcome['value'][1])                         
                  
                        <img src="{{  url('storage/' . $welcome['value'][1]['data']['images'] ?? 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg') }} "
                            class="object-cover transition duration-700 ease-out group-hover:scale-105 rounded-md bg-white/5 ring-1 ring-white/10  hover:scale-125 mb-2"
                            alt="{{ $welcome['value'][1]['data']['images'] }}" />
                        <a href="#"
                            class="text-xs text-zinc-900 dark:text-white ">{{  $welcome['value'][2]['data']['desc'] ?? 'Nama' }} (Camat Koto tangah ) <span
                                aria-hidden="true">→</span></a>
                        
                        <!-- ========== End img and name ========== -->
                        @endisset    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
