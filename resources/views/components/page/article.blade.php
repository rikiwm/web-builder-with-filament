@props(['content' => '', 'categori' => '','title' => '','img' => ''])
<article class=" gap-5  flex rounded-radius  flex-col overflow-hidden bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
    <div class="mx-auto  overflow-hidden max-w-screen-md"> 
        {{ $img }}
    </div>
    <div class="mx-auto w-full  max-w-screen-md flex flex-col gap-4 p-6  border border-zinc-200 dark:border-zinc-700 rounded-xl">
        {{ $categori }}
        {{ $title }}
       {{ $content }}    
    </div>
</article>