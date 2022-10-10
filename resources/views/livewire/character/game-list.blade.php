<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-12">
    <div class="p-6 sm:px-20 bg-white">
        <div class="mt-8 text-2xl">
            {{ $game->name }} Player Characters
        </div>

        <div class="mt-6 text-gray-500">
            @if($this->hasCharacters())
                This is a list of all player characters in {{ $game->name }}.
            @else
                There aren't any player characters for {{ $game->name }} yet.
            @endif
        </div>
    </div>

    @if($this->hasCharacters())
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            @foreach($game->characters as $character)
                <div class="p-6" wire:key="character-{{ $character->id }}">
                    <div class="text-sm font-bold ml-12 text-gray-500">
                        {{ $character->user->name }}
                    </div>

                    <div class="ml-12 text-lg text-gray-600 leading-7 font-semibold">
                        {{ $character->character_name ?? 'Unnamed' }}
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            {{ $character->class_level ?? 'Unknown class / level' }}
                        </div>

                        <div class="mt-2 text-sm text-gray-500">
                            <div class="font-bold uppercase">Attributes</div>
                            {{ $this->attributeSummary($character->attributes) }}
                        </div>

                        <div class="mt-2 text-sm text-gray-500">
                            <div class="font-bold uppercase">Saving Throws</div>
                            {{ $this->savingThrowsSummary($character->savingThrows) }}
                        </div>

                        <div class="mt-2 text-sm text-gray-500">
                            <div class="font-bold uppercase">Combat</div>
                            HP {{ $this->currentHp($character->current_hit_points) }} of {{ $character->hit_point_maximum ?? '?' }}
                            /
                            AC {{ $character->armor_class ?? '?' }}
                            /
                            Init {{ $character->initiative ?? '?' }}
                            /
                            Speed {{ $character->speed ?? '?' }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
