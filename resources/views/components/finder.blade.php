<div class="md:flex justify-center md:justify-between items-center">
    <div class="block font-medium text-sm text-gray-700">
        <span class="block md:hidden mb-4">
            Swipe left/right to quickly navigate between groups.
            <br />
            Press and hold to clear group navigation and open the fast field
            finder.
            <br />
            Use the finder below to quickly locate a field.
        </span>

        <span class="hidden md:block">
            Pressing the <x-shared.code>[</x-shared.code> and
            <x-shared.code>]</x-shared.code> keys quickly navigates between
            groups.
            <br />
            Pressing the <x-shared.code>\</x-shared.code> key will clear group
            navigation and scroll to the top.
            <br />
            Pressing the <x-shared.code>=</x-shared.code> key will open the fast
            field finder.
        </span>
    </div>

    <div>
        <label for="finder" class="sr-only">Fast Field Finder</label>
        <x-jet-input id="finder" list="finder-fields" class="block mt-1 w-full" type="text" placeholder="Fast field finder" />
        <datalist id="finder-fields"></datalist>
    </div>
</div>
