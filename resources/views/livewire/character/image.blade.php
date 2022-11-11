<div class="grid grid-cols-1 gap-6" data-field-label="{{ $label }}">
    <input rel="field" type="hidden" wire:model="character.{{ $name }}" />

    <div x-data="{ image_name: null, image_preview: null }">
        <x-jet-label :for="$name" :value="$label" />

        <input
            type="file" wire:model="image_path" class="hidden" x-ref="{{ $name }}" id="{{ $name }}"
            x-on:change="
                image_name = $refs.{{ $name }}.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    image_preview = e.target.result;
                };
                reader.readAsDataURL($refs.{{ $name }}.files[0]);
            "
        />

        <div x-show="! image_preview" class="my-4">
            @if($character->imageUrl($name))
                <img src="{{ $character->imageUrl($name) }}" alt="" class="rounded-full h-40 w-40 object-cover" />
            @else
                <x-svg.default-image class="h-40 w-40 object-cover opacity-25" />
            @endif
        </div>

        <div x-show="image_preview" class="my-4">
            <span
                class="block rounded-full w-40 h-40 bg-cover bg-no-repeat bg-center"
                x-bind:style="'background-image: url(\'' + image_preview + '\');'"
            ></span>
        </div>

        <div class="flex flex-row flex-wrap gap-4">
            @if($character->{$name})
                <x-jet-secondary-button @click="image_preview = null" wire:click="removeImage('{{ $name }}')">Remove Current Image</x-jet-button>
            @endif

            <x-jet-secondary-button x-on:click="$refs.{{ $name }}.click()">Choose New Image</x-jet-button>
        </div>
    </div>
</div>
