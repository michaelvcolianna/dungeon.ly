<div class="grid grid-cols-2 gap-6" id="attributes-{{ $attribute->name }}">
    <x-form.field type="string" :label="$attribute->label" model="attribute.value" />
    <x-form.field type="string" label="Bonus" model="attribute.bonus" />
</div>
