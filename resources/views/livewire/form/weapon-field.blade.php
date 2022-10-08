<div class="grid grid-cols-1 gap-6" id="weapons-weapon_{{ $weapon->number }}">
    <div class="grid grid-cols-2 gap-6">
        <x-form.field type="string" label="Name" model="weapon.name" />
        <x-form.field type="string" label="Attack Bonus" model="weapon.attack_bonus" />
    </div>

    <x-form.field type="string" label="Damage/Type" model="weapon.damage_type" />
</div>
