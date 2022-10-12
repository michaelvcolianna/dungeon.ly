<div class="grid gap-6 md:gap-0">
    @if($results)
        <x-section id="group-results" wire:key="group-results">
            <x-slot:title>Results History</x-slot:title>
            <x-slot:description>
                <div>Refresh the page to clear or <a class="cursor-pointer underline text-gray-600 hover:text-gray-900" wire:click="clearHistory">use this link</a>.</div>
            </x-slot:description>

            <div class="grid gap-2">
                @foreach($results as $i => $result)
                    <div class="grid grid-cols-3 gap-4 items-start" wire:key="result-{{ $i }}">
                        <div class="leading-tight">{!! $result['details'] !!}</div>
                        <div><strong>Total:</strong> {{ $result['total'] }}</div>
                        <div class="justify-self-end text-sm text-gray-300">{{ $result['datetime'] }}</div>
                    </div>
                @endforeach
            </div>
        </x-section>

        <x-jet-section-border />
    @endif

    <x-section id="dice-roller">
        <x-slot:title>Dice Roller</x-slot:title>
        <x-slot:description>
            <div>For a simple roll, enter the quantity and type (plus optional modifier). Alternatively, you can use the <a class="underline text-gray-600 hover:text-gray-900" href="https://github.com/ringmaster/dicecalc#dice-expressions" target="_blank" aria-describedby="label-external">dice expressions here</a> <x-svg.external class="h-3 w-3 inline" /> in the text field to roll something complicated.</div>

            <div class="mt-2">Examples:
                <ul class="list-disc pl-4 grid gap-2">
                    <li>
                        <code class="text-sm px-1">4d6r&lt;1h3</code> rolls 4d6, rerolls 1s, then keeps the 3 highest dice.
                    </li>

                    <li>
                        <code class="text-sm px-1">2d20h1 / 2d20l1</code> rolls 2d20 at advantage/disadvantage.
                    </li>
                </ul>
            </div>
        </x-slot:description>

        <form class="grid grid-cols-3 gap-4" wire:submit.prevent="roll">
            <x-form.field group="dice" name="quantity" model="quantity" label="Quantity" type="string" wire:key="dice-quantity" />

            <div class="grid grid-cols-1 gap-6" id="dice-type">
                <label class="block">
                    <span class="block font-medium text-sm text-gray-700">Type</span>
                    <select wire:model="type" wire:key="dice-type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm appearance-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @foreach($types as $value)
                            <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <x-form.field group="dice" name="modifier" model="modifier" label="Modifier" type="string" wire:key="dice-modifier" />

            <div class="col-span-3" id="dice-expression">
                <x-form.field group="dice" name="expression" model="expression" label="Expression" type="string" wire:key="dice-expression" />
            </div>

            <div class="col-span-3" id="dice-submit">
                <x-jet-button>Roll</x-jet-button>
            </div>
        </form>
    </x-section>
</div>
