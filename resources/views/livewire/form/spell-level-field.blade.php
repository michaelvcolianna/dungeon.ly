<div class="grid grid-cols-1 gap-6">
    <div class="grid grid-cols-2 gap-6">
        @include('components.field.string', ['label' => 'Slots Total', 'model' => 'spell_level.slots_total'])
        @include('components.field.string', ['label' => 'Slots Expended', 'model' => 'spell_level.slots_expended'])
    </div>

    @include('components.field.text', ['label' => 'Spells', 'model' => 'spell_level.spells'])
</div>
