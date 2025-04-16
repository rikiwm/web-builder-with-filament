<div>
    <div class="block w-lg">
        <input type="text" x-model="search"
            wire:model.live.debounce.300ms="search"
            class="text-center block w-full p-3 ps-10 text-sm text-sky-950 rounded-lg bg-white  focus:ring-zinc-500 focus:border-zinc-500 dark:bg-zinc-950/70 dark:placeholder-white dark:text-zinc-50 dark:focus:ring-zinc-100 ease-in-out dark:transition-colors"
            placeholder="Search" aria-label="search" />
    </div>

    @if(strlen($search) > 2)
        <div class="mt-4">
            <h5 class="text-sm font-bold text-zinc-500 dark:text-zinc-300">Hasil dari Post</h5>
            <ul class="list-disc list-inside">
                @forelse ($posts as $post)
                    <li class="text-sm text-zinc-700 dark:text-zinc-100">
                        <strong>{{ $post->title }}</strong><br>
                    </li>
                @empty
                    <li class="text-sm text-zinc-500">Tidak ditemukan.</li>
                @endforelse
            </ul>

            <h5 class="mt-3 text-sm font-bold text-zinc-500 dark:text-zinc-300">Hasil dari Page</h5>
            <ul class="list-disc list-inside">
                @forelse ($pages as $page)
                    <li class="text-sm text-zinc-700 dark:text-zinc-100">
                        <strong>{{ $page->title }}</strong><br>
                    </li>
                @empty
                    <li class="text-sm text-zinc-500">Tidak ditemukan.</li>
                @endforelse
            </ul>
        </div>
    @endif
</div>
