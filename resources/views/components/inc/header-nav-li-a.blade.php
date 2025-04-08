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
                                class="block p-3 rounded-lg hover:bg-zinc-300/50 dark:hover:bg-zinc-100/20" aria-current="{{ $rute }}">
                                <div class="flex min-w-0 gap-x-4 ">
                                    <span class="text-sm bg-gray-200/50 rounded-md p-2 text-center dark:text-zinc-200">
                                        <svg class="size-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
                                        </svg>
                                        {{-- {{ $c->icon }} --}}
                                    </span>
                                    <div class="font-light capitalize text-sm">{{ $c->name }}</div>
                                    {{-- <p class="text-xs/5 text-gray-900 text-start dark:text-white">
                                        {{ $c->name }}
                                    </p> --}}
                                    </div>
                                {{-- <div class="font-light capitalize text-sm">{{ $c->name }}</div>
                                <span class="text-xs  font-normal dark:text-zinc-200">{{ $c->icon }}</span> --}}
                            </a>
                        </li>
                    </ul>
                @empty
                @endforelse
                <ul class="">
                    <div class="border border-dashed w-full p-4 bg-white/20 rounded-md">
                        <x-inc.header-logo class="size-12"/>
                    </div>
                </ul>
            </div>
        </div>
    @endif
</li>
