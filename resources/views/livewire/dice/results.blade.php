<div>
    @if($result)
        <x-jet-dialog-modal wire:model="result">
            <x-slot name="title">
                Dice Roll Result
            </x-slot>

            <x-slot name="content">
                <div class="grid gap-8 mt-8">
                    <div class="flex items-baseline gap-3">
                        {{ $result['for'] }}:
                        <strong class="text-2xl">{{ $result['total'] }}</strong>
                    </div>

                    <div class="font-medium text-gray-700 grid">
                        <strong>Detail:</strong>
                        <span class="text-xl">{!! $result['details'] !!}</span>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button
                    wire:click="$set('result', null)"
                    wire:loading.attr="disabled"
                >
                    Close
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>
    @endif
</div>
