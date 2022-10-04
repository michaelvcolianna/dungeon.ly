<div class="grid grid-cols-2 gap-6 items-center">
    @include('components.field.string', ['label' => $saving_throw->label, 'model' => 'saving_throw.value'])

    <x-form.checkbox :name="$saving_throw->label" label="Proficient" :checked="$saving_throw->is_proficient" />
</div>
