<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center gap-2">
            <a class="inline-flex items-center justify-center h-8 w-8" href="{{ route('characters.listing') }}">
                <x-svg.chevron-left class="h-4 w-4 stroke-2" />
                <span class="sr-only">Back to characters list</span>
            </a>

            {{ __('Character Sheet') }}
        </h2>

        @if($character->canBeNpc())
            <livewire:character.npc-toggle />
        @endif
    </x-slot>

    <div class="grid gap-4 border-b mb-8 mx-4 xs:mx-0 pb-10">
        <x-finder />
    </div>

    <div class="grid gap-8">
        <x-jet-section id="information" data-group-label="Information">
            <x-slot:title>Information</x-slot:title>
            <x-slot:description>General information about the character.</x-slot:description>

            <div class="mt-4 grid gap-4 relative md:pb-[11.25rem]">
                <div class="md:absolute right-0 -top-4">
                    <livewire:character.image name="avatar_path" label="Avatar" description="The image displayed for your character on maps and listings." />
                </div>

                <livewire:character.information />

                <div class="md:absolute right-0 bottom-0">
                    <livewire:character.image name="group_symbol_path" label="Group Symbol" description="An image that indicates membership in your group, like a flag or a holy symbol." />
                </div>
            </div>
        </x-jet-section>

        <x-jet-section id="attributes" data-group-label="Attributes">
            <x-slot:title>Attributes</x-slot:title>
            <x-slot:description>Your character's statistics and bonuses.</x-slot:description>

            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($character->attributes as $attribute)
                    <livewire:character.attribute-field :attribute="$attribute" wire:key="attribute-{{ $attribute->id }}" />
                @endforeach

                <livewire:character.attributes />
            </div>
        </x-jet-section>

        <x-jet-section id="saving_throws" data-group-label="Saving Throws">
            <x-slot:title>Saving Throws</x-slot:title>
            <x-slot:description>Your character's save bonuses and proficiencies.</x-slot:description>

            <div class="mt-4 grid gap-4 grid-cols-2 xs:grid-cols-3">
                @foreach($character->savingThrows as $savingThrow)
                    <livewire:character.saving-throw-field :saving_throw="$savingThrow" wire:key="saving_throw-{{ $savingThrow->id }}" />
                @endforeach
            </div>
        </x-jet-section>

        <x-jet-section id="skills" data-group-label="Skills">
            <x-slot:title>Skills</x-slot:title>
            <x-slot:description>Your character's skills and proficiencies.</x-slot:description>

            <div class="mt-4 grid gap-4 grid-cols-2 sm:grid-cols-3 xl:grid-cols-6">
                @foreach($character->skills as $skill)
                    <livewire:character.skill-field :skill="$skill" wire:key="skill-{{ $skill->id }}" />
                @endforeach
            </div>
        </x-jet-section>

        <x-jet-section id="combat" data-group-label="Combat">
            <x-slot:title>Combat</x-slot:title>
            <x-slot:description>Your character's combat abilities and attacks.</x-slot:description>

            <div class="mt-4 grid gap-4">
                <livewire:character.combat />

                <div class="grid gap-4 xs:grid-cols-3" data-field-label="Death Saves">
                    <div class="flex items-center gap-4 col-span-2">
                        <span class="flex-grow block font-medium text-sm text-gray-700">Death Save Successes</span>

                        @foreach($character->deathSaves()->where('kind', 'success')->get() as $deathSave)
                            <livewire:character.death-save-field :death_save="$deathSave" wire:key="death_save-{{ $deathSave->id }}" />
                        @endforeach
                    </div>

                    <div class="flex items-center gap-4 col-span-2">
                        <span class="flex-grow block font-medium text-sm text-gray-700">Death Save Failures</span>

                        @foreach($character->deathSaves()->where('kind', 'failure')->get() as $deathSave)
                            <livewire:character.death-save-field :death_save="$deathSave" wire:key="death_save-{{ $deathSave->id }}" />
                        @endforeach
                    </div>
                </div>

                <livewire:character.weapons />
            </div>
        </x-jet-section>

        <x-jet-section id="gear" data-group-label="Gear">
            <x-slot:title>Gear</x-slot:title>
            <x-slot:description>Your character's money, equipment, and treasure.</x-slot:description>

            <div class="mt-4">
                <livewire:character.gear />
            </div>
        </x-jet-section>

        <x-jet-section id="magic" data-group-label="Magic">
            <x-slot:title>Magic</x-slot:title>
            <x-slot:description>Your character's magical statistics and spell lists.</x-slot:description>

            <div class="mt-4 grid gap-4">
                <livewire:character.spellcasting />

                @foreach($character->spellLevels as $spellLevel)
                    <div class="grid gap-4">
                        <livewire:character.spell-level-field :spell_level="$spellLevel" wire:key="spell-level-{{ $spellLevel->id }}" />
                        <livewire:character.spells :spellLevel="$spellLevel" />
                    </div>
                @endforeach
            </div>
        </x-jet-section>
    </div>
</x-app-layout>
