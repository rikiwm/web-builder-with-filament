{{--
<footer class="bg-white rounded-lg shadow dark:bg-black">
    <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">
            <x-application-logo class="block w-auto fill-current dark:text-green-600 h-9" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-green-200">Laravel</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="" class="hover:underline">Laravel</a>. All Rights Reserved.</span>
    </div>
</footer>
 --}}

@props(['content'=>'', 'class' => ''])


<footer class="backdrop-blur-lg rounded-md {{ $class }}">
{{ $content }}
</footer>
