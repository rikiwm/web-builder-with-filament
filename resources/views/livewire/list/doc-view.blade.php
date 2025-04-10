@props(['title' => '', 'datacount'=>'', 'model_view' => '','column'=>'lg:grid-cols-4 ','menu' => ''])
@php
    if ($model_view === 'tabel') {$column = 'grid-cols-1';}
@endphp
<div>
    {{-- @dd($datacount) --}}
    <x-page.section-page>
        <x-slot name="content">
            <div class="py-0 md:py-1 max-w-screen-xl  mx-auto ">
                <div class=" p-0 md:p-2 mb-8  mx-auto">
                    <aside aria-label="Related articles" class="px-4 py-8 lg:py-2 lg:px-12 bg-zinc-50/20 dark:backdrop-blur-md dark:bg-transparent ">
                        <div class="justify-center ">
                            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{{ Str::headline($title ?? '') }}</h2>
                           <!-- ========== Start Content ========== -->
                                {{-- @if ($title === 'blog')
                                <div class="grid gap-6 grid-cols-1 lg:grid-cols-4">
                                    <article class="lg:col-span-3 group grid  rounded-xl grid-cols-1 md:grid-cols-8 overflow-hidden border border-zinc-100 hover:border-zinc-400 bg-surface-alt 
                                    text-on-surface dark:border-zinc-500/30 dark:bg-transparent dark:text-white">
                                        <!-- image -->
                                        <div class="col-span-3 overflow-hidden ">
                                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp" class="h-52 md:h-full w-full object-cover transition duration-700 ease-out group-hover:scale-105 saturate-0 hover:saturate-50" alt="a men wearing VR goggles" />
                                        </div>
                                        <!-- body -->
                                        <div class="flex flex-col justify-center p-6 col-span-5">
                                            <small class="mb-4 font-medium">Artificial Intelligence</small>
                                            <h3 class="text-balance text-xl font-bold text-on-surface-strong lg:text-2xl dark:text-on-surface-dark-strong" aria-describedby="articleDescription">AI-Powered VR Goggles Redefine Reality: Augmented Vision for Al</h3>
                                            <p id="articleDescription" class="my-4 max-w-lg text-pretty text-sm">
                                                Experience the next level of augmented reality with smart
                                                goggles integrating cutting-edge AI for seamless interaction
                                                with the world around you.
                                            </p>
                                            <a href="#" class="w-fit font-medium text-zinc-500 underline-offset-2 hover:underline focus:underline focus:outline-hidden dark:text-primary-dark">
                                                Read full story
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="2.5" aria-hidden="true" class="inline size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                                </svg>
                                            </a>
                                        </div>
                                    </article>
                                    <div class="lg:col-span-1 border border-zinc-100 hover:border-zinc-400 lg:p-2 p-1 rounded-xl dark:border-zinc-500/30">
                                        <x-tabs.tabs-button>
                                            <x-slot name="action">
                                                <button x-on:click="selectedTab = 'new'" 
                                                    x-bind:aria-selected="selectedTab === 'new'" 
                                                    x-bind:tabindex="selectedTab === 'new' ? '0' : '-1'" 
                                                    x-bind:class="selectedTab === 'new' ? 'font-bold text-zinc-500 border-b-2 border-primary dark:border-zinc-500/30 dark:text-zinc-100' : 'text-sky-950 font-medium dark:text-zinc-700 dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-zinc-600'" 
                                                    class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelNew" >Terbaru</button>
                                                <button x-on:click="selectedTab = 'popular'" x-bind:aria-selected="selectedTab === 'popular'" 
                                                x-bind:tabindex="selectedTab === 'popular' ? '0' : '-1'" 
                                                x-bind:class="selectedTab === 'popular' ? 'font-bold text-zinc-500 border-b-2 border-primary dark:border-primary-dark dark:text-zinc-100' : 'text-sky-950 font-medium dark:text-zinc-700 dark:hover:border-b-outline-dark-strong dark:hover:text-on-surface-dark-strong hover:border-b-2 hover:border-b-outline-strong hover:text-on-surface-strong'" 
                                                class="h-min px-4 py-2 text-sm" type="button" role="tab" aria-controls="tabpanelpPpular" >Populer</button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <div x-cloak x-show="selectedTab === 'new'" id="tabpanelNew" role="tabpanel" aria-label="new">
                                                    @for($i = 0; $i < 4; $i++)
                                                    <div class="mb-2 w-full max-w-2xl border-outline bg-white p-2 text-left dark:border-zinc-500/30 dark:bg-zinc-800/20 rounded-lg border" >
                                                        <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                            <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-4.webp" class="size-16 rounded-md object-cover saturate-0 hover:saturate-50" alt="User avatar"/>
                                                            <span class="text-xs font-bold">write a short paragraph about penguin
                                                                <br>
                                                                <a href="#" class="text-2xs font-extralight hover:underline focus:underline focus:outline-hidden text-zinc-500/50 dark:text-zinc-800">Read if bored</a>
                                                            </span>

                                                        </div>

                                                    </div>

                                                    @endfor
                                                </div>
                                                <div x-cloak x-show="selectedTab === 'popular'" id="tabpanelPopular" role="tabpanel" aria-label="popular">
                                                @for($i = 0; $i < 4; $i++)
                                                    <div class="w-full max-w-2xl border-outline bg-surface-alt p-2 text-left dark:border-zinc-500/30 dark:bg-zinc-800/20 rounded-lg border" >
                                                        <div class="flex items-start gap-2 text-on-surface-strong dark:text-on-surface-dark-strong">
                                                            <img src="https://thumbs.dreamstime.com/b/web-324830810.jpg" class="size-16 rounded-md object-cover saturate-0 hover:saturate-50" alt="User avatar"/>
                                                            <span class="text-xs font-bold">write a short  about penguin</span>
                                                        </div>
                                                        <!-- Actions -->
                                                    </div>
                                                    @endfor

                                                </div>
                                            </x-slot>

                                        </x-tabs.tabs-button>
                                        </div>
                                </div>
                                @endif --}}
                                <div class="grid {{ $column }} gap-6 lg:py-4 py-4">                        
                                    @if ($model_view === 'tabel')
                                    <div class="w-full min-w-screen">
                                        <div class="overflow-hidden w-full overflow-x-auto rounded-lg border border-outline dark:border-zinc-500">
                                            <table class="w-full rounded-md  text-left text-sm text-on-surface dark:text-on-surface-dark">
                                                <thead class="border-b border-outline bg-gray-100 dark:bg-zinc-800 text-sm text-on-surface-strong 
                                                dark:border-zinc-600 dark:bg-surface-dark-alt dark:text-on-surface-dark-strong">
                                                    <tr>
                                                        <th scope="col" class="p-4">Judul</th>
                                                        <th scope="col" class="p-4 text-end">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-outline dark:divide-outline-dark">
                                                    @foreach ($data as $item)
                                                    <x-list.tabel-post :data="$item" :title="$title" :limit="$limit" modelView="{{ $model_view }}"/>                                    
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    @endif  
                                </div>
                           <!-- ========== End Content ========== -->
                        </div>
                      </aside>

                </div>
            </div>

        </x-slot>
    </x-page.section-page>
</div>
