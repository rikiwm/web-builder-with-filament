@props(['level' => '', 'title' => '', 'uppercase' => false, 'class' => 'text-gray-900 dark:text-gray-100 font-semibold text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl', 'id' => ''])
@php
    $level = $level ?: 'h1';
    $class = $class ?: 'text-gray-900 dark:text-gray-100 font-semibold text-lg md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl';
    $id = $id ?: '';
    $uppercase = $uppercase ?: false;
    $class = $class . ($uppercase ? ' uppercase' : '');
@endphp
<{{ $level }} {{ $class }}  {{ $uppercase ? 'uppercase' : '' }}" >
    {{ $title }}
</{{ $level }}>

