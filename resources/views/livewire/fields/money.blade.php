<div class="grid grid-cols-5 gap-4">
    <x-fields.text
        :name="$this->fieldName('cp')" label="CP"
        id="fast-fields--{{ $this->fieldName('cp') }}"
    />
    <x-fields.text
        :name="$this->fieldName('sp')" label="SP"
        id="fast-fields--{{ $this->fieldName('cp') }}"
    />
    <x-fields.text
        :name="$this->fieldName('ep')" label="EP"
        id="fast-fields--{{ $this->fieldName('cp') }}"
    />
    <x-fields.text
        :name="$this->fieldName('gp')" label="GP"
        id="fast-fields--{{ $this->fieldName('cp') }}"
    />
    <x-fields.text
        :name="$this->fieldName('pp')" label="PP"
        id="fast-fields--{{ $this->fieldName('cp') }}"
    />
</div>
