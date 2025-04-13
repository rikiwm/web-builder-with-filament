@props([
    'name' =>'',
    'data' => '',
])
<div class="swiper-slide">
    <div
        class="w-full max-w-lg  border border-gray-200 rounded-xl shadow-sm dark:bg-zinc-800/10 dark:border-sky-700/30">
        <a href="{{ route('post.detail', $data->slug) }}"
            class="flex flex-col items-center   md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 ">
            @isset( $data->images)
            <img class="object-cover w-full  h-50 md:h-80 md:w-full-1/2 rounded-t-xl saturate-0 hover:saturate-100"src="{{ url('storage/' . $data->images ?? '') }}"
            alt="sample image" />
                @else
                <img class="object-cover w-full  h-50 md:h-80 md:w-full-1/2 rounded-t-xl saturate-0 hover:saturate-100"
                src="https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg"
                alt="sample image" />
            @endisset
          
        </a>
        <div
            class="flex flex-col justify-between p-4 leading-normal">
            <a href="{{ route('post.detail', $data->slug) }}"
                class=" text-zinc-400 text-xs w-fit font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-zinc-900 dark:text-zinc-700 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor"
                    viewBox="0 0 18 18">
                    <path
                        d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                </svg>
                {{ $data->created_at->locale('id')->diffForHumans() ?? '' }}
            </a>
            <h5
                class="px-2 mb-2 text-start text-lg/6 font-bold tracking-tight text-sky-950 dark:text-white">
            {{ $name ?? '' }}
            </h5>
            <p
                class="mb-3 font-normal text-sky-950 dark:text-gray-400">
              {!! Str::limit($data->content[0]['data']['paragraph'] ?? '', 120, preserveWords: true) !!}
            </p>
            <a href="{{ route('post.detail', $data->slug) }}" 
                class="text-zinc-400 dark:text-zinc-300 hover:underline font-medium text-xs/4 inline-flex items-center justify-end">Read
                more
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 14 10">
                    <path stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>