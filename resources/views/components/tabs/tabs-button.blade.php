@props([
    'action',
    'show' => false,
    'content' => '',
    'class' => '',
])
<div x-data="{ selectedTab: 'new' }" class="w-full lg:col-span-1">
    <div x-on:keydown.right.prevent="$focus.wrap().next()" 
    x-on:keydown.left.prevent="$focus.wrap().previous()" 
    class="flex gap-2 overflow-x-auto border-b border-outline dark:border-outline-dark" role="tablist" aria-label="tab options">
        {{ $action }}

    </div>
    <div class="px-2 py-4 text-on-surface dark:text-on-surface-dark {{ $class }}">
        {{ $content }}
    </div>
</div>