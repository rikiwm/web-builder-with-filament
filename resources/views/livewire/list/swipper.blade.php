@props(['title' => '', 'data','route' => ''])
<div>
   <div class="flex flex-row justify-between items-start">
    <div>
        <h2
        class="text-sky-950 text-start dark:text-white text-xl font-extrabold mb-2">
        Berita Terbaru</h2>
    <p
        class="text-xs/4  text-start font-normal text-gray-500 dark:text-gray-400 mb-4">
        Berita terbaru dari berbagai sumber terpercaya.
    </p>
    
    </div>
        <a name="" id="" class="whitespace-nowrap bg-transparent rounded-lg border border-success px-4 py-2 text-sm font-medium tracking-wide text-success transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-success active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed
         dark:border-sky-950 dark:text-success dark:focus-visible:outline-success"
         href="/blog" role="button">Lihat Semua</a>
    </div>
  

    <x-carousel.section-caraousel>
        <x-slot name="content">
            @foreach ($data as $d)
            <x-carousel.section-caraousel-item :name="$d->title" :data="$d" />
            @endforeach
        </x-slot>
    </x-carousel.section-caraousel>
    
</div>
