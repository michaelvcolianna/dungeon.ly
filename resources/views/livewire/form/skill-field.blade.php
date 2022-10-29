<div class="grid grid-cols-2 gap-6 items-center" id="skills-{{ $skill->name }}" wire:ignore>
    <x-form.field type="string" :label="$skill->display_label" model="skill.value" />

    <div class="mt-5">
        <x-form.checkbox name="skill-{{ $skill->name }}" label="Proficient" :checked="$skill->is_proficient" />
    </div>
</div>
