@props(['content' => ''])
<div class="max-w-screen mx-auto px-4">
  <nav class="text-sm font-medium text-on-surface dark:text-on-surface-dark" aria-label="breadcrumb">
      <ol class="flex flex-wrap items-center gap-2">
         {{ $content }}
      </ol>
  </nav>
</div>