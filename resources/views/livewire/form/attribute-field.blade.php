<div class="grid grid-cols-2 gap-6">
    @include('components.field.string', ['label' => $attribute->label, 'model' => 'attribute.value'])
    @include('components.field.string', ['label' => 'Bonus', 'model' => 'attribute.bonus'])
</div>
