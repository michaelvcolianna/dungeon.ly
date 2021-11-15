<div class="grid grid-cols-1 gap-4">
    <x-fields.text
        :name="$this->fieldName('maximum')" label="Hit Point Maximum"
    />
    <x-fields.textarea
        :name="$this->fieldName('current')" label="Current Hit Points"
    />
    <x-fields.textarea
        :name="$this->fieldName('temporary')" label="Temporary Hit Points"
    />
</div>
