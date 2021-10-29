@props(['id', 'label', 'character'])

<div>
    <input type="hidden" wire:model="character.{{ $id }}" />

    <div x-data="{ {{ $id }}Name: null, {{ $id }}Preview: null }">
        <label
            for="{{ $id }}"
            {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}
        >
            {{ $label }}
        </label>

        <input
            type="file" wire:model="{{ $id }}" class="hidden" x-ref="{{ $id }}"
            x-on:change="
                {{ $id }}Name = $refs.{{ $id }}.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    {{ $id }}Preview = e.target.result;
                };
                reader.readAsDataURL($refs.{{ $id }}.files[0]);
            "
        />

        <div x-show="! {{ $id }}Preview" class="my-4">
            <img src="{{ $character->getImage($id) }}" alt="" class="rounded-full h-40 w-40 object-cover" />
        </div>

        <div x-show="{{ $id }}Preview" class="my-4">
            <span
                class="block rounded-full w-40 h-40 bg-cover bg-no-repeat bg-center"
                x-bind:style="'background-image: url(\'' + {{ $id }}Preview + '\');'"
            ></span>
        </div>

        <div class="flex flex-row">
            @if($character->{$id})
                <x-jet-secondary-button class="mr-4" wire:click="removeImage('{{ $id }}')">Remove Current Image</x-jet-button>
            @endif

            <x-jet-secondary-button x-on:click="$refs.{{ $id }}.click()">Choose New Image</x-jet-button>
        </div>
    </div>
</div>
