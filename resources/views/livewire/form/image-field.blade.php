<div class="grid grid-cols-1 gap-6" wire:ignore.self>
    <input type="hidden" wire:model="character.{{ $name }}" />

    <div x-data="{ {{ $name }}_name: null, {{ $name }}_preview: null }">
        <label for="{{ $name }}" class="block font-medium text-sm text-gray-700">
            {{ $label }}
        </label>

        <input
            type="file" wire:model="{{ $name }}" class="hidden" x-ref="{{ $name }}"
            x-on:change="
                {{ $name }}_name = $refs.{{ $name }}.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    {{ $name }}_preview = e.target.result;
                };
                reader.readAsDataURL($refs.{{ $name }}.files[0]);
            "
        />

        <div x-show="! {{ $name }}_preview" class="my-4">
            @if($character->getImageUrl($name))
                <img src="{{ $character->getImageUrl($name) }}" alt="" class="rounded-full h-40 w-40 object-cover" />
            @else
                <x-svg.image class="rounded-full h-40 w-40 object-cover opacity-25" />
            @endif
        </div>

        <div x-show="{{ $name }}_preview" class="my-4">
            <span
                class="block rounded-full w-40 h-40 bg-cover bg-no-repeat bg-center"
                x-bind:style="'background-image: url(\'' + {{ $name }}_preview + '\');'"
            ></span>
        </div>

        <div class="flex flex-row">
            @if($character->{$name})
                <x-jet-secondary-button class="mr-4" wire:click="removeImage('{{ $name }}')">Remove Current Image</x-jet-button>
            @endif

            <x-jet-secondary-button x-on:click="$refs.{{ $name }}.click()">Choose New Image</x-jet-button>
        </div>
    </div>
</div>
