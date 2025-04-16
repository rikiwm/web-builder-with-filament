
@props(['data'=>'','class'=>'size-6','parent' => '', 'logo' => 'pdg.png'])
@php
    if (request()->segment(1) == 'dasawisma') {
        # code...
     $parent = 'Dasawisma';
     $logo = 'pkk.png';
    }
@endphp

<a href="/" class="flex items-center  space-x-2 rtl:space-x-reverse ">
<img class="{{ $class ?? '' }} rounded dark:bg-zinc-100/50 bg-blend-multiply dark:grayscale-50" 
 src="{{ asset('frontend/'.$logo) }}"
{{-- src="https://diskominfo.majalengkakab.go.id/wp-content/uploads/2017/05/cropped-logo-diskominfo.png" --}}
 alt="">
 <div class="flex flex-col items-start">
     <span class="-mb-1 text-xs bg-gradient-to-r from-zinc-950 to-slate-600 dark:from-zinc-50 dark:to-zinc-200 bg-clip-text font-semibold text-transparent">{{ $parent ?? 'Kecamatan' }}</span>
     <span class="-mt-1 text-xl bg-gradient-to-r from-zinc-950 to-slate-600 dark:from-zinc-50 dark:to-zinc-200 bg-clip-text font-bold text-transparent uppercase">Koto Tangah</span>
 </div>
</a>

                                                