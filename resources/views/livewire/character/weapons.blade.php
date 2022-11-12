<div class="grid gap-4" data-field-label="List of weapons">
    <div class="font-bold uppercase sm:font-medium sm:normal-case text-sm text-gray-700">Weapons</div>

    @if($weapons->isNotEmpty())
        <div class="hidden sm:grid gap-4 grid-cols-[2fr,1fr,2fr,3rem] font-bold text-xs text-gray-700 uppercase">
            <span>Name</span>
            <span>Atk Bonus</span>
            <span>Damage/Type</span>
        </div>

        @foreach($weapons as $wid => $weapon)
            <div class="grid gap-4 grid-cols-4 sm:grid-cols-[2fr,1fr,2fr,3rem]" wire:key="weapon-{{ $weapon->id }}">
                <div class="order-1 col-span-3 sm:col-auto">
                    <x-jet-label class="sm:sr-only" for="weapon.{{ $weapon->id }}.name" value="Weapon #{{ $loop->iteration }} Name" />
                    <x-jet-input rel="field" id="weapon.{{ $weapon->id }}.name" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="weapons.{{ $wid }}.name" />
                </div>

                <div class="order-3 col-span-2 sm:col-auto sm:order-2">
                    <x-jet-label class="sm:sr-only" for="weapon.{{ $weapon->id }}.attack_bonus">
                        <x-shared.roll-label label="Weapon #{{ $loop->iteration }} Attack Bonus" method="rollAttackBonus({{ $wid }})" />
                    </x-jet-label>
                    <x-jet-input rel="field" id="weapon.{{ $weapon->id }}.attack_bonus" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="weapons.{{ $wid }}.attack_bonus" />
                </div>

                <div class="order-4 col-span-2 sm:col-auto sm:order-3">
                    <x-jet-label class="sm:sr-only" for="weapon.{{ $weapon->id }}.damage_type">
                        <x-shared.roll-label label="Weapon #{{ $loop->iteration }} Damage/Type" method="rollDamage({{ $wid }})" />
                    </x-jet-label>
                    <x-jet-input rel="field" id="weapon.{{ $weapon->id }}.damage_type" class="block mt-1 w-full" type="text" wire:model.debounce.500ms="weapons.{{ $wid }}.damage_type" />
                </div>

                <div class="order-2 text-right self-end sm:order-4">
                    <x-jet-danger-button class="h-[2.65rem]" wire:click="deleteWeapon({{ $weapon->id }})">
                        <span class="sr-only">Delete Weapon {{ $weapon->id }}</span>
                        <x-svg.trash class="h-4 w-4 stroke-[3]" />
                    </x-jet-danger-button>
                </div>
            </div>
        @endforeach
    @endif

    <div>
        <x-jet-button wire:click="addWeapon">Add Weapon</x-jet-button>
    </div>
</div>
