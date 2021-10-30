<div {{ $attributes }}>
    <input type="hidden" wire:model="{{ $wireModel }}" />

    <div x-data="
        {
            {{ $alpineName }}: null,
            {{ $alpinePreview }}: null,
            label: {{ $alpineLabel }}
        }"
    >
        <label
            for="{{ $field }}" x-show="label"
            class="block font-medium text-center text-sm text-gray-700"
        >
            {{ $label }}
        </label>

        <input
            type="file" wire:model="{{ $field }}" class="hidden"
            x-ref="{{ $field }}" x-on:change="
                {{ $alpineName }} = {{ $alpineRef }}.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    {{ $alpinePreview }} = e.target.result;
                };
                reader.readAsDataURL({{ $alpineRef }}.files[0]);
            "
        />

        <div x-show="! {{ $alpinePreview }}" class="my-4 mx-auto h-40 w-40">
            <img
                src="{{ $src }}" alt=""
                class="rounded-full h-full w-full object-cover"
            />
        </div>

        <div x-show="{{ $alpinePreview }}" class="my-4 mx-auto h-40 w-40">
            <span
                class="block rounded-full w-full h-full bg-cover bg-no-repeat bg-center"
                x-bind:style="
                    'background-image: url(\'' + {{ $alpinePreview }} + '\');'
                "
            ></span>
        </div>

        <div class="flex flex-row justify-center">
            @if($character->{$field})
                <x-jet-secondary-button
                    class="mr-4" wire:click="removeImage('{{ $field }}')"
                >
                    Remove
                </x-jet-button>
            @endif

            <x-jet-secondary-button x-on:click="{{ $alpineRef }}.click()">
                Choose
            </x-jet-button>
        </div>
    </div>
</div>
