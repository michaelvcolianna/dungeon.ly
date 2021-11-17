<div class="mt-4 grid grid-cols-1 gap-4">
    <div>
        <div class="block font-medium text-sm text-gray-700">
            Death Save Successes
        </div>

        <div class="grid grid-cols-3 gap-4">
            @for($i = 1; $i < 4; $i++)
                <x-fields.checkbox
                    :name="$this->fieldName('successes.' . $i)" :label="$i"
                />
            @endfor
        </div>
    </div>

    <div>
        <div class="block font-medium text-sm text-gray-700">
            Death Save Failures
        </div>

        <div class="grid grid-cols-3 gap-4">
            @for($i = 1; $i < 4; $i++)
                <x-fields.checkbox
                    :name="$this->fieldName('failures.' . $i)" :label="$i"
                />
            @endfor
        </div>
    </div>
</div>
