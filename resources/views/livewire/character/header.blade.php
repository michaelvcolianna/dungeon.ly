<h2 class="items-center flex flex-row justify-between text-xl text-gray-800 leading-tight">
    <span class="truncate flex-shrink {{ $character->name ? 'font-semibold' : 'italic' }}">{{ $character->name ?? 'Unnamed character' }}</span>
    <span class="ml-4 flex-shrink-0 text-xs">{{ $character->user->name }}</span>
</h2>
