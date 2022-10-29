<div class="grid grid-cols-2 gap-6 items-center" id="saving_throws-{{ $saving_throw->name }}" wire:ignore>
    <x-form.field type="string" :label="$saving_throw->label" model="saving_throw.value" />

    <div class="mt-5">
        <x-form.checkbox name="saving-throw-{{ $saving_throw->name }}" label="Proficient" :checked="$saving_throw->is_proficient" />
    </div>
</div>
