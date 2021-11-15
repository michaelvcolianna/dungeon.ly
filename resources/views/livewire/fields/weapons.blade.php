<div class="grid grid-cols-1 gap-4">
    <div class="grid grid-cols-1 gap-4">
        <x-fields.text
            :name="$this->fieldName('1.name')" label="Weapon 1 Name"
        />
        <x-fields.text
            :name="$this->fieldName('1.atk_bonus')" label="Weapon 1 Atk Bonus"
        />
        <x-fields.text
            :name="$this->fieldName('1.damage_type')"
            label="Weapon 1 Damage/Type"
        />
    </div>

    <div class="grid grid-cols-1 gap-4">
        <x-fields.text
            :name="$this->fieldName('2.name')" label="Weapon 2 Name"
        />
        <x-fields.text
            :name="$this->fieldName('2.atk_bonus')" label="Weapon 2 Atk Bonus"
        />
        <x-fields.text
            :name="$this->fieldName('2.damage_type')"
            label="Weapon 2 Damage/Type"
        />
    </div>

    <div class="grid grid-cols-1 gap-4">
        <x-fields.text
            :name="$this->fieldName('3.name')" label="Weapon 3 Name"
        />
        <x-fields.text
            :name="$this->fieldName('3.atk_bonus')" label="Weapon 3 Atk Bonus"
        />
        <x-fields.text
            :name="$this->fieldName('3.damage_type')"
            label="Weapon 3 Damage/Type"
        />
    </div>
</div>
