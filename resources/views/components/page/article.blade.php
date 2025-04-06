@props(['content' => '', 'categori' => '','title' => ''])
<article class=" gap-5  flex rounded-radius  flex-col overflow-hidden bg-surface-alt text-on-surface dark:border-outline-dark dark:bg-surface-dark-alt dark:text-on-surface-dark">
    <div class="mx-auto  overflow-hidden max-w-screen-md"> 
        <img src="https://penguinui.s3.amazonaws.com/component-assets/card-img-1.webp" class="object-cover rounded-md transition duration-700 ease-out group-hover:scale-105" alt="a penguin robot talking with a human" />
    </div>
    <div class="mx-auto  max-w-screen-xl flex flex-col gap-4 p-6  border border-zinc-200 dark:border-zinc-700 rounded-xl">
        {{ $categori }}
        {{ $title }}
       {{ $content }}    
    </div>
</article>