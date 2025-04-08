@props(['content' => '', 'class' => ''])
@php
$content = $content ?? '';
$img = Str::endsWith($content, '.jpg', '.jpeg', ',png');
$file = Str::endsWith($content, '.docx', '.doc', '.pdf');
@endphp
@if ($img === true)
<div class="w-full rounded-lg py-4">
    <div class="w-full h-auto bg-gray-200 rounded-lg dark:bg-zinc-900">
        <img src="{{ url('storage/' .$content) }}" class="object-cover w-full h-full rounded-lg" alt="a" loading="lazy" />
    </div>
</div>
@elseif ($file === true)
<embed src="{{ url('storage/' .$content) }}" type="application/pdf" class="object-cover w-full py-2 mx-auto" width="100%" height="100%"></embed>
{{-- <object data="{{ url('storage/' .$content) }}" type="application/pdf" class="object-cover w-full py-2 mx-auto" width="100%" height="100%">
    <p class="text-center text-gray-500">Your browser does not support PDFs. <a href="{{ url('storage/' .$content) }}" class="text-blue-600 hover:underline">Download the PDF</a>.</p>
</object> --}}
@endif