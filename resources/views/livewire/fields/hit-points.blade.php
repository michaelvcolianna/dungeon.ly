<div class="grid grid-col-1 gap-4" id="fast-field--hit_points">
    <x-fields.text
        :name="$this->fieldName('maximum')" label="Hit Point Maximum"
    />

    <x-fields.textarea
        :name="$this->fieldName('current')" label="Current Hit Points"
    />

    <x-fields.textarea
        :name="$this->fieldName('temporary')" label="Temporary Hit Points"
        rows="3"
    />
</div>
