<div x-data="
    {
        {{ $this->getAlpineName() }}: null,
        {{ $this->getAlpinePreview() }}: null,
        label: {{ $label ? 'true' : 'false' }}
    }"
>
    <label
        for="{{ $name }}" x-show="label"
        class="block font-medium text-center text-sm text-gray-700"
    >
        {{ $label }}
    </label>

    <input
        type="file" wire:model="{{ $name }}" class="hidden"
        x-ref="{{ $this->getField() }}" x-on:change="
            {{ $this->getAlpineName() }} = $refs.{{ $this->getField() }}.files[0].name;
            const reader = new FileReader();
            reader.onload = (e) => {
                {{ $this->getAlpinePreview() }} = e.target.result;
            };
            reader.readAsDataURL($refs.{{ $this->getField() }}.files[0]);
        "
    />

    <div x-show="! {{ $this->getAlpinePreview() }}" class="my-4 mx-auto h-40 w-40">
        <img
            src="{{ $this->getSrc() }}" alt=""
            class="rounded-full h-full w-full object-cover"
        />
    </div>

    <div x-show="{{ $this->getAlpinePreview() }}" class="my-4 mx-auto h-40 w-40">
        <span
            class="block rounded-full w-full h-full bg-cover bg-no-repeat bg-center"
            x-bind:style="
                'background-image: url(\'' + {{ $this->getAlpinePreview() }} + '\');'
            "
        ></span>
    </div>

    <div class="flex flex-row justify-center">
        @if($this->hasField())
            <x-jet-secondary-button
                class="mr-4" wire:click="removeImage"
            >
                Remove
            </x-jet-button>
        @endif

        <x-jet-secondary-button x-on:click="$refs.{{ $this->getField() }}.click()">
            Choose
        </x-jet-button>
    </div>
</div>
