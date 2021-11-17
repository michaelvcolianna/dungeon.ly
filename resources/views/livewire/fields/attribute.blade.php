<div>
    <div class="block font-bold text-sm text-gray-700">
        {{ $label }}
    </div>

    <div class="grid grid-cols-2 xs:grid-cols-4 md:grid-cols-2 gap-4">
        <x-fields.text :name="$this->fieldName('value')" label="Value" />

        <x-fields.text :name="$this->fieldName('bonus')" label="Bonus" />

        <x-fields.text
            :name="$this->fieldName('saving_throw')" label="Saving Throw"
        />

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
