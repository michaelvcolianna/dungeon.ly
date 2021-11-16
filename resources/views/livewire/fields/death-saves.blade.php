<div>
    <div class="grid grid-cols-6 gap-4">
        <div class="block font-medium text-sm text-gray-700 col-span-3">
            Death Save Successes
        </div>

        @for($i = 1; $i < 4; $i++)
            <x-fields.checkbox
                :name="$this->fieldName('successes.' . $i)" :label="$i"
            />
        @endfor
    </div>

    <div class="grid grid-cols-6 gap-4">
        <div class="block font-medium text-sm text-gray-700 col-span-3">
            Death Save Failures
        </div>

        @for($i = 1; $i < 4; $i++)
            <x-fields.checkbox
                :name="$this->fieldName('failures.' . $i)" :label="$i"
            />
        @endfor
    </div>
</div>
