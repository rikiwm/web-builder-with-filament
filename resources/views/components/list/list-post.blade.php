@props(['data' => '', 'limit' => '', 'title' => null, 'class' => '','link' => null,'class' => 'col-span-1'])
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

{{-- <article class="max-w-sm mx-auto {{ $class }}">
    <a href="{{ route('post.detail', $data->slug) }}" wire:navigate>
        @forelse ($image as $img)
        <img src="{{ url('storage/' . $img ?? '') }}"
        class="mb-5 rounded-lg" loading="lazy">
        @break
        @empty
        <img src="https://www.thewall360.com/uploadImages/ExtImages/images1/def-638240706028967470.jpg"
        class="mb-5 rounded-lg saturate-0 hover:saturate-50" loading="lazy">
        @endforelse
    </a>
    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
        <a href="{{ route('post.detail', $data->slug) }}"  wire:navigate>
            {{ Str::limit($data->title ?? '', 48, preserveWords: true) }}
        </a>
    </h2>
    <p class="mb-4 text-gray-500 dark:text-gray-400">
        {{ Str::limit($data->title ?? '', 120, preserveWords: true) }}</p>
        <span>
            {{$data->created_at->locale('id')->diffForHumans()}} |
        </span>
    <a href="#" class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
        {{ $data->categori->name }}
    </a>
</article> --}}


<article class="flex max-w-xl flex-col items-start justify-between py-4">
    @if ($data->categori->slug == 'kelurahan')
    <a href="{{ url('kelurahan',$data->slug) }}" wire:navigate>
    @else
    <a href="{{ route('post.detail', $data->slug) }}" wire:navigate>
    @endif
<img src="{{ $img[0]['data']['content'] ?? 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg' }}"
        class="mb-2 lg:mb-1 rounded-lg object-cover w-full h-52" loading="lazy">
    </a>
    <div class="flex items-center gap-x-2 text-xs">
      <time datetime="2020-03-16" class="text-gray-500">{{$data->created_at->locale('id')->diffForHumans()}}</time>
      <a href="#" class="relative z-10 rounded-md bg-slate-100 px-3 py-1 font-medium text-gray-400 hover:bg-gray-400 dark:bg-sky-900/50"> {{ $data->categori->name }}</a>
    </div>
    <div class="group relative items-end">
        
      <h3 class="mt-2 text-lg/6 font-semibold text-zinc-600 dark:text-slate-200 group-hover:text-gray-600 ">
        @if ($data->categori->slug == 'kelurahan')
        <a href="{{ url('kelurahan',$data->slug) }}"  wire:navigate>
        @else
        <a href="{{ route('post.detail', $data->slug) }}"  wire:navigate>
        @endif
            <span class="absolute inset-0 "></span>
            {{ Str::limit($data->title ?? '', 48, preserveWords: true) }}
        </a>
 
      </h3>
      <p class="mt-2 line-clamp-3 text-sm/6 text-gray-600 items-start ">
        @if ($data->categori->name === 'kelurahan') Illo sint voluptas. Error voluptates culpa eligendi.deserunt vel. Iusto corrupti dicta. @endif
    </p>
    </div>

  </article>