<div class="grid grid-cols-1 gap-4">
    <x-fields.text
        :name="$this->fieldName('total')" label="Hit Dice Total"
    />
    <x-fields.textarea
        :name="$this->fieldName('value')" label="Hit Dice"
    />
</div>
