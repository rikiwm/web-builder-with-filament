<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

@props([
    'statePath' => null,
])

<div
    wire:ignore
    x-data
    x-init="
        ClassicEditor
            .create($refs.editor)
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('{{ $statePath }}', editor.getData())
                })
            })
    "
>
    <textarea
        x-ref="editor"
        wire:model.defer="{{ $statePath }}"
        class="w-full h-48 border rounded p-2"
    ></textarea>
</div>
