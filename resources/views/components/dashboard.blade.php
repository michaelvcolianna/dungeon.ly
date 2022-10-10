<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @if($userOwnsCurrentTeam())
        <livewire:character.game-list />
    @endif

    <livewire:character.listing />
</div>
