<div class="grid grid-col-1 gap-4">
    <x-fields.text
        :name="$this->fieldName('maximum')" label="Hit Point Maximum"
        id="fast-field--{{ $this->fieldName('maximum') }}"
    />

    <x-fields.textarea
        :name="$this->fieldName('current')" label="Current Hit Points"
        id="fast-field--{{ $this->fieldName('current') }}"
    />

    <x-fields.textarea
        :name="$this->fieldName('temporary')" label="Temporary Hit Points"
        rows="3" id="fast-field--{{ $this->fieldName('temporary') }}"
    />
</div>
