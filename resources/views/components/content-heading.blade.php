@props(['level' => '', 'title' => '', 'uppercase' => false])
<{{ $level }} class="text-xl font-bold mb-4 lg:mb-2 {{ $uppercase ? 'uppercase' : '' }}"  style="text-align: start">
    {{ $title }}
</{{ $level }}>

