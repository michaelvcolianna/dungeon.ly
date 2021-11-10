<x-app-layout>
    <x-slot name="header">
        <livewire:character.header />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4">
                <x-shared.section>
                    <x-slot name="header">
                        Image
                    </x-slot>

                    <livewire:fields.file-upload field="character.appearance" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Details
                    </x-slot>

                    <livewire:fields.text field="character.name" label="Name" />
                    <livewire:fields.text field="character.class_level" label="Class & Level" />
                    <livewire:fields.text field="character.background" label="Background" />
                    <livewire:fields.text field="character.race" label="Race" />
                    <livewire:fields.text field="character.alignment" label="Alignment" />
                    <livewire:fields.text field="character.experience_points" label="Experience Points" />
                    <livewire:fields.textarea field="character.features_traits" label="Features & Traits" />
                    <livewire:fields.textarea field="character.other_proficiencies_languages" label="Other Proficiencies & Languages" />
                    <livewire:fields.textarea field="character.additional_features_traits" label="Additional Features & Traits" />
                    <livewire:fields.text field="character.affiliation" label="Group Affiliation" />
                    <livewire:fields.textarea field="character.allies_organizations" label="Allies & Organizations" />
                </x-shared.section>

                <x-shared.section>
                    <x-slot name="header">
                        Biographical
                    </x-slot>

                    <livewire:fields.text field="character.age" label="Age" class="md:col-start-2 lg:col-auto" />
                    <livewire:fields.text field="character.height" label="Height" />
                    <livewire:fields.text field="character.weight" label="Weight" />
                    <livewire:fields.text field="character.eyes" label="Eyes" class="md:col-start-2 lg:col-auto" />
                    <livewire:fields.text field="character.skin" label="Skin" />
                    <livewire:fields.text field="character.hair" label="Hair" />
                    <livewire:fields.textarea field="character.personality_traits" label="Personality Traits" />
                    <livewire:fields.textarea field="character.ideals" label="Ideals" />
                    <livewire:fields.textarea field="character.bonds" label="Bonds" />
                    <livewire:fields.textarea field="character.flaws" label="Flaws" />
                    <livewire:fields.textarea field="character.backstory" label="Backstory" />
                </x-shared.section>
            </div>
        </div>
    </div>
</x-app-layout>
