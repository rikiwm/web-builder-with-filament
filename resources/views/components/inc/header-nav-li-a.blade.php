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
        class=" block px-3 py-2 {{ $active }} rounded md:bg-transparent text-sm
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
                                class="block p-3 rounded-lg hover:bg-zinc-300/50 dark:hover:bg-zinc-100/20 ">
                                <div class="font-light capitalize text-sm">{{ $c->name }}</div>
                                <span
                                    class="text-xs {{ $active }} font-normal dark:text-zinc-200">{{ $c->icon }}</span>
                            </a>
                        </li>
                    </ul>
                @empty
                @endforelse
                <ul class="">
                    <div class="border border-dashed w-full p-4 bg-white/20 rounded-md">
                        <x-inc.header-logo/>
                    </div>
                </ul>
            </div>
        </div>
    @endif
</li>
