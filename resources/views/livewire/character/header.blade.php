<h2
    class="
        text-xl text-gray-800 leading-tight grid grid-cols-1 gap-4
        md:grid-cols-4 items-center
    "
>
    <span
        class="
            md:col-span-3 md:truncate
            {{ !empty($character->name) ? 'font-semibold' : 'italic' }}
        "
    >
        {{ !empty($character->name) ? $character->name : 'Unknown name' }}
    </span>

    <span>
        <input
            id="fields-search" placeholder="Find field" list="fast-fields"
            type="text" class="
                border-gray-300 focus:border-indigo-300 focus:ring w-full
                focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm
            "
        />
        <datalist id="fast-fields"></datalist>
    </span>
</h2>

@push('scripts')
    <script defer>
        let searchField = document.querySelector('#fields-search'),
            fastFields = document.querySelector('#fast-fields'),
            rawFields = {}
            ;

        // Listener for the datalist change
        searchField.onchange = () => {
            var value = searchField.value;
            var option = Array.prototype.find.call(searchField.list.options, option => {
                return option.value === value;
            });

            // If the change resulted in a chosen option, scroll to it and clear
            // the input field
            if(option)
            {
                let chosenElement = document.querySelector('#' + CSS.escape(option.rel));
                chosenElement.scrollIntoView();
                searchField.value = null;
            }
        };

        // Build the list of raw fields and names
        document.querySelectorAll('[id^="fast-field--"]').forEach(field => {
            let key = field.id.replaceAll('fast-field--', '').replaceAll('character.', '').replaceAll('.', ' ').replaceAll('_', ' ').replace(/(?:^|\s|["'([{])+\S/g, match => match.toUpperCase());
            rawFields[key] = field.id;
        });

        // Sort the list alphabetically
        const orderedFields = Object.keys(rawFields).sort().reduce(
            (obj, key) => {
                obj[key] = rawFields[key];
                return obj;
            },
            {}
        );

        // Add datalist options from the sorted list
        Object.entries(orderedFields).forEach(field => {
            const [key, value] = field;
            let option = document.createElement('option');

            option.value = key;
            option.rel = value;

            fastFields.appendChild(option);
        });
    </script>
@endpush
