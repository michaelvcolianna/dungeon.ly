<div class="grid grid-cols-2 gap-6 items-center">
    @include('components.field.string', ['label' => $skill->display_label, 'model' => 'skill.value'])

    <x-form.checkbox name="skill-{{ $skill->name }}" label="Proficient" :checked="$skill->is_proficient" />
</div>
