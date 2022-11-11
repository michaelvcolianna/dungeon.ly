<label class="flex gap-2">
    <x-jet-checkbox id="{{ $idBase }}.is_checked" wire:model="death_save.is_checked" />
    <span class="sr-only">#{{ $death_save->number }}</span>
</label>
