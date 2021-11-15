<div>
    <div class="block font-medium text-sm text-gray-700">
        Death Saves
    </div>

    <div class="grid grid-cols-3 gap-4">
        <x-fields.checkbox
            :name="$this->fieldName('successes.1')" label="Success 1"
        />
        <x-fields.checkbox
            :name="$this->fieldName('successes.2')" label="Success 2"
        />
        <x-fields.checkbox
            :name="$this->fieldName('successes.3')" label="Success 3"
        />
    </div>

    <div class="grid grid-cols-3 gap-4">
        <x-fields.checkbox
            :name="$this->fieldName('failures.1')" label="Failure 1"
        />
        <x-fields.checkbox
            :name="$this->fieldName('failures.2')" label="Failure 2"
        />
        <x-fields.checkbox
            :name="$this->fieldName('failures.3')" label="Failure 3"
        />
    </div>
</div>
