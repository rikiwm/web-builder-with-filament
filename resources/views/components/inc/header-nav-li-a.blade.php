@props([
    'navtitle' => '',
    'child' => '',
    'rute' => '',
    'active' => request()->url() == url($rute) ? 'text-slate-950 dark:text-zinc-200 font-bold' : 'dark:text-slate-400 text-slate-700 font-normal',
    'class' => 'grid-cols',
])
@php
    $class = count($child->children) >= 1 ? ($class = 'grid-cols-3') : 'grid-cols-1';
    $place = $child->type == 'place' ? ($place = true) : false;
@endphp
<li class=" group">
    <a @if($child->type == 'link')  href="{{ url($rute) }}" target="_blank" @elseif (!$place || $rute == 'home' || $child->type == 'page' ) href="{{ url($rute) }}" wire:navigate  @endif 
        class=" block px-3 py-2 {{ $active }} rounded md:bg-transparent text-sm capitalize
     md:p-0"
        aria-current="{{ $rute }}">{{ $navtitle }}</a>
    @if ($child->children->isNotEmpty() && $place)
        <div
            class="dropdown-content absolute left-0 right-0 justify-center mx-auto mt-5 w-full  max-w-screen-md  bg-gray-100/80 dark:bg-black/80  shadow-lg rounded-b-xl ">
            <div class="grid px-4 gap-4 py-4 mx-auto  text-gray-900 dark:text-white md:{{ $class }} md:px-6">
                @forelse ($child->children as $c)
                    <ul>
                        <li>
                            <a href="{{ url($c->slug) }}" wire:navigate
                                class="block p-2 rounded-lg hover:bg-zinc-300/50 dark:hover:bg-zinc-100/20" aria-current="{{ $rute }}">
                                <div class="flex min-w-0 gap-x-4 items-center ">
                                    <span class="text-sm bg-gray-200/50 rounded-md p-2 text-center dark:text-zinc-200">
                                        <svg class="size-4" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#231F20" d="M56,0H8C5.789,0,4,1.789,4,4v52c0,4.418,3.582,8,8,8h40h4c2.211,0,4-1.789,4-4V4C60,1.789,58.211,0,56,0z M52,56H16c-2.211,0-4-1.789-4-4s1.789-4,4-4h36V56z"></path> </g></svg>
                                        {{-- {{ $c->icon }} --}}
                                    </span>
                                    <div class="font-base capitalize text-sm">{{ $c->name }}</div>
                            
                                    </div>
                                {{-- <div class="font-light capitalize text-sm">{{ $c->name }}</div>
                                <span class="text-xs  font-normal dark:text-zinc-200">{{ $c->icon }}</span> --}}
                            </a>
                        </li>
                    </ul>
                @empty
                @endforelse
                {{-- <ul class="">
                    <div class="border border-dashed w-full p-4 bg-white/20 rounded-md">
                        <x-inc.header-logo class="size-12"/>
                    </div>
                </ul> --}}
            </div>
        </div>
    @endif
</li>
