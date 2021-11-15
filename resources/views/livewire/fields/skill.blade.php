<div class="grid grid-cols-1 gap-4">
    <x-fields.checkbox
        :name="$this->fieldName('proficiency')"
        :label="$this->fieldLabel('Proficiency')"
    />
    <x-fields.text
        :name="$this->fieldName('value')" :label="$this->fieldLabel('Value')"
    />
    <div class="block font-medium text-sm text-gray-700">
        {{ $label }} Attribute
        <span class="font-bold text-black">{{ $attribute }}</span>
    </div>
</div>
