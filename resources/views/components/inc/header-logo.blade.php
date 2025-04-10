
@props(['data'=>'','class'=>'size-7'])
@php
$app = Str::remove('-',config('app.name', 'Koto Tangah'));
$name = Str::ucsplit($app);
$first = Str::ucfirst($name[0]);
@endphp
<a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
<img class="{{ $class ?? '' }} rounded dark:bg-zinc-100/80 bg-blend-multiply dark:grayscale-50" 
 src="{{ asset('frontend/pdg.png') }}"
{{-- src="https://diskominfo.majalengkakab.go.id/wp-content/uploads/2017/05/cropped-logo-diskominfo.png" --}}
 alt="">
    <span
        class="self-center text-2xl bg-gradient-to-r from-zinc-950 to-slate-600 dark:from-zinc-50 dark:to-zinc-200 bg-clip-text font-bold text-transparent">Koto Tangah</span>
</a>

                                                