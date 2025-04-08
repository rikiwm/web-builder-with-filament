@props(['data' => '', 'limit' => '', 'title' => null, 'class' => '','link' => null,'modelView' => ''])
{{-- <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
    <div class="flex w-0 flex-1 items-center">
      <svg class="size-6 shrink-0 dark:text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
        <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z" clip-rule="evenodd" />
      </svg>
      <div class="ml-4 flex min-w-screen-sm flex-1 gap-12 items-center">
        <span class="truncate dark:text-gray-400 font-semibold capitalize">{{ $data->title }}</span>
      </div>
    </div>
    <div class="ml-4 shrink-0 flex  items-center gap-6">
      <span class="shrink-0 text-xs text-gray-400/50 ">4.5mb</span>
      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Unduh</a>
    </div>
  </li> --}}

  <tr>
    <td class="p-4">{{ $data->title }}</td>
    <td class="p-4 text-end">
      <span class="inline-flex overflow-hidden rounded-md border-green-400 px-1 py-0.5 text-xs font-medium text-success bg-sky-800/20">
        <a href="#" class="">{{ $data->slug }}-Unduh</a>
      </span>
    </td>
</tr> 