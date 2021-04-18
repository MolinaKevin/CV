@props(['id' => null, 'maxWidth' => null])

<x-modal-alt :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="">
        <div class="text-lg bg-transparent">
            {{ $title }}
        </div>

        <div class="mb-2">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 bg-gray-100 text-right">
        {{ $footer }}
    </div>

</x-modal>
