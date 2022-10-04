<div class="grid grid-cols-3 gap-6">
    @include('components.field.string', ['label' => 'Name', 'model' => 'weapon.name'])
    @include('components.field.string', ['label' => 'Attack Bonus', 'model' => 'weapon.attack_bonus'])
    @include('components.field.string', ['label' => 'Damage/Type', 'model' => 'weapon.damage_type'])
</div>
