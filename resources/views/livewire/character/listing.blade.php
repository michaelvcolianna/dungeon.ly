<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="p-6 sm:px-20 bg-white">
        <div class="mt-8 text-2xl">
            Characters
        </div>

        @if($this->hasCharacters())
            <div class="mt-6 text-gray-500">
                This is a list of your characters.
            </div>
        @endif

        <div class="mt-6">
            <x-jet-button wire:click="addCharacter">Add One</x-jet-button>
        </div>
    </div>

    @if($this->hasCharacters())
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
            @foreach($this->allCharacters() as $character)
                <div class="p-6">
                    <div class="flex items-center">
                        @if($character->avatar_url)
                            <img src="{{ $character->avatar_url }}" alt="{{ $character->name ?? 'Unnamed' }}'s avatar" height="24" width="24" class="w-8 h-8 rounded-full" />
                        @else
                            <x-svg.image class="w-8 h-8 text-gray-400" />
                        @endif

                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">{{ $character->name ?? 'Unnamed' }}</div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500">
                            Created {{ $character->created_at->diffForHumans() }}
                        </div>

                        <div class="mt-2 text-sm text-gray-500">
                            {{ $character->class_level ?? 'Unknown class / level' }}
                        </div>

                        <div class="mt-2 text-sm text-gray-500">
                            {{ $this->attributeSummary($character->attributes) }}
                        </div>

                        <a href="#">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Manage character</div>

                                <div class="ml-1 text-indigo-500">
                                    <x-svg.arrow class="w-4 h-4" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
