<h2 class="
        {{ !empty($character->name) ? 'font-semibold' : 'italic' }} flex
        flex-row items-center justify-between text-xl text-gray-800
        leading-tight
    "
>
    {{ !empty($character->name) ? $character->name : 'Unknown name' }}
</h2>
