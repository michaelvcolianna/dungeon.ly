<div>
    <div
        class="block font-bold text-sm text-gray-700"
        id="fast-field--{{ $name }}"
    >
        {{ $label }} ({{ $attribute }})
    </div>

    <div class="grid grid-cols-4 gap-4">
        <div
            class="col-span-3"
        >
            <label
                for="{{ $this->fieldName('value') }}"
                class="block font-medium text-sm text-gray-700"
            >
                Value
            </label>

            <input
                type="text" id="{{ $this->fieldName('value') }}"
                wire:model.debounce.500ms="{{ $this->fieldName('value') }}"
                class="
                    border-gray-300 focus:border-indigo-300 focus:ring w-full
                    focus:ring-indigo-200 focus:ring-opacity-50 rounded-md
                    shadow-sm
                "
            />
        </div>

        <div>
            <label
                for="{{ $this->fieldName('proficiency') }}" class="
                    block font-medium text-sm text-gray-700
                "
            >
                Proficiency
            </label>

            <input
                type="checkbox" id="{{ $this->fieldName('proficiency') }}"
                wire:model="{{ $this->fieldName('proficiency') }}"
                class="
                    rounded border-gray-300 text-indigo-600 shadow-sm
                    focus:border-indigo-300 focus:ring focus:ring-indigo-200
                    focus:ring-opacity-50 mt-3
                "
            />
        </div>
    </div>
</div>
