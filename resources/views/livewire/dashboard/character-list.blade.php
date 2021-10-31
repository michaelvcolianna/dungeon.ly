<div class="px-4 md:px-0">
    <div class="font-bold text-2xl text-gray-900 mb-2">
        Your Characters
    </div>

    @if($characters->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($characters as $character)
                <div class="bg-white border border-gray-200 rounded-lg px-4 py-3 text-gray-600 cursor-pointer ring-red-700 ring-opacity-50 hover:ring" wire:click="viewCharacter({{ $character->id }})">
                    <div class="w-full flex flex-row justify-between {{ $character->name ? 'font-bold' : 'italic' }}">
                        <div class="mr-2 truncate">
                            {{ $character->name ?? 'No name' }}
                        </div>

                        <div class="ml-2 text-right">
                            <span class="bg-gray-600 text-white rounded-full px-2">{{ $character->team->name }}</span>
                        </div>
                    </div>

                    <div class="mt-2 text-sm w-full flex flex-row justify-between">
                        <div class="mr-2 truncate flex-shrink {{ $character->class_level ? '' : 'italic' }}">
                            {{ $character->class_level ?? 'Unknown class/level' }}
                        </div>

                        <div class="ml-2 flex-grow whitespace-nowrap text-right">
                            Added {{ $character->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="italic text-gray-600">
            No characters yet for this game.
        </div>
    @endif

    <div class="mt-4">
        <x-jet-button wire:click="addCharacter">Create New Character</x-jet-button>
    </div>
</div>
