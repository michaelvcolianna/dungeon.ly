<div class="flex flex-row flex-wrap justify-start items-center w-full">
    <x-jet-label for="name" value="Character" />
    <input class="flex-grow cursor-pointer ml-3 border-0 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md text-xl text-gray-800 leading-tight {{ $character->name ? 'font-semibold' : 'italic' }}" id="name" type="text" wire:model.lazy="character.name" autocomplete="name" />
</div>
