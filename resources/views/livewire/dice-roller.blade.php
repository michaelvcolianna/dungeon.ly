<div class="grid md:grid-cols-2 gap-6 md:gap-x-8">
    @if($results)
        <x-jet-section class="md:col-span-2">
            <x-slot:title>Results History</x-slot:title>
            <x-slot:description>
                <div>Refresh the page to clear, or <button class="cursor-pointer underline text-gray-600 hover:text-gray-900" wire:click="clearHistory">use this link</button>.</div>
            </x-slot:description>

            <div class="grid gap-2 mt-6">
                @foreach(array_reverse($results) as $result)
                    <div class="grid sm:grid-cols-3 sm:gap-4 items-start" wire:key="result-{{ $loop->index }}">
                        <div class="text-gray-700">{!! $result['details'] !!}</div>
                        <div class="text-xl"><strong>Total:</strong> {{ $result['total'] }}</div>
                        <div class="justify-self-end text-sm text-gray-300">{{ $result['datetime'] }}</div>
                    </div>
                @endforeach
            </div>
        </x-jet-section>
    @endif

    <x-jet-section>
        <x-slot:title>Common Rolls</x-slot:title>
        <x-slot:description>
            <div>These are some common "simple" rolls, but a more comprehensive roller is below.</div>
        </x-slot:description>

        <div class="mt-4 flex flex-wrap gap-4 justify-center md:justify-start">
            <x-jet-button wire:click="roll('d20')">Check/To Hit</x-jet-button>
            <x-jet-button wire:click="roll('2d20h1')">Check/To Hit @ Advantage</x-jet-button>
            <x-jet-button wire:click="roll('2d20l1')">Check/To Hit @ Disadvantage</x-jet-button>
            <x-jet-button wire:click="roll('d%')">Percentage</x-jet-button>
            <x-jet-button wire:click="roll('4d6r<1h3')">Stat Gen</x-jet-button>
        </div>
    </x-jet-section>

    <x-jet-section>
        <x-slot:title>Dice Roller</x-slot:title>
        <x-slot:description>
            <div>For a simple roll, enter the quantity and type (plus optional modifier). Alternatively, you can use the <a class="underline text-gray-600 hover:text-gray-900" href="https://github.com/ringmaster/dicecalc#dice-expressions" target="_blank" aria-describedby="label-external">dice expressions here</a> in the text field to roll something complicated.</div>

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

        <form class="grid grid-cols-3 gap-4 mt-6" wire:submit.prevent="roll">
            <x-jet-field.string label="Quantity" model="quantity" />

            <div class="grid grid-cols-1 gap-6" id="dice-type">
                <label class="block">
                    <span class="block font-medium text-sm text-gray-700">Type</span>
                    <select wire:model="type" wire:key="dice-type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm appearance-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @foreach($types as $value)
                            <option wire:key="value-{{ $loop->index }}" value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </label>
            </div>

            <x-jet-field.string label="Modifier" model="modifier" />

            <div class="col-span-3" id="dice-expression">
                <x-jet-field.string label="Expression" model="expression" />
            </div>

            <div class="col-span-3" id="dice-submit">
                <x-jet-button>Roll</x-jet-button>
            </div>
        </form>
    </x-jet-section>
</div>
