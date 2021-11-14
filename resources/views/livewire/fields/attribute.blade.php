<div>
    <x-fields.text
        :name="$this->fieldName('value')" :label="$this->fieldLabel('Value')"
    />
    <x-fields.text
        :name="$this->fieldName('bonus')" :label="$this->fieldLabel('Bonus')"
    />
    <x-fields.checkbox
        :name="$this->fieldName('proficiency')"
        :label="$this->fieldLabel('Proficiency')"
    />
    <x-fields.text
        :name="$this->fieldName('saving_throw')"
        :label="$this->fieldLabel('Saving Throw')"
    />
</div>
