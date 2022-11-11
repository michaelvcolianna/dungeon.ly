<div class="grid gap-8 md:gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @if($characters->isNotEmpty())
        @foreach($characters as $character)
            <div class="grid gap-4 grid-cols-[50px,1fr] sm:grid-cols-none items-start bg-white p-4 shadow-lg sm:rounded-lg" wire:key="character-{{ $character->id }}">
                <div class="col-span-full sm:col-auto font-bold text-left text-xl">{{ $character->display_name }}</div>

                <div class="w-full sm:w-2/3 md:w-1/2">
                    @if($character->avatar_url)
                        <img src="{{ $character->avatar_url }}" alt="{{ $character->display_name }}'s avatar" height="0" width="0" class="w-full h-1/2 object-cover rounded-full" />
                    @else
                        <x-svg.default-image class="w-full h-auto text-slate-300" />
                    @endif
                </div>

                <div class="grid text-slate-500 text-sm md:text-base">
                    <span>Created {{ $character->created_at->diffForHumans() }}</span>
                    <span>{{ $character->display_class_level }} ({{ $character->display_race }})</span>
                    <span>{{ $this->attributesSummary($character) }}</span>
                </div>

                <div class="col-span-full sm:col-auto text-right sm:text-left">
                    <x-jet-link-button :href="$character->url" class="gap-2 h-8">View/manage character</x-jet-link-button>
                </div>
            </div>
        @endforeach
    @else
        <div class="italic text-slate-700 text-lg">Looks like you don't have any characters yet.</div>
    @endif
</div>
