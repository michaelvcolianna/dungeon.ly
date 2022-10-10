<div class="mb-12 grid md:flex justify-center md:justify-between items-center">
    <div class="block font-medium text-sm text-gray-700">
        <span class="block md:hidden">
            Use the finder below to quickly locate a field.
        </span>

        <span class="hidden md:block">
            Pressing the <x-code>[</x-code> and <x-code>]</x-code> keys quickly navigates between groups.
            <br />
            Pressing the <x-code>\</x-code> key will clear group navigation and scroll to the top.
            <br />
            Pressing the <x-code>=</x-code> key will open the fast field finder.
        </span>
    </div>

    <div>
        <label for="finder" class="sr-only">Fast Field Finder</label>
        <input type="text" id="finder" list="finder-fields" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Fast field finder" />
        <datalist id="finder-fields"></datalist>
    </div>

    <script>const groups = @js($groups);</script>
</div>
