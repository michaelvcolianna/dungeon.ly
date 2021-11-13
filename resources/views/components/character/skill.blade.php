<div>
    <livewire:fields.text field="{{ $field }}.value" label="{{ $label() }} Value" />
    <livewire:fields.checkbox field="{{ $field }}.proficiency" label="{{ $label() }} Proficiency" />

    <div class="flex items-center">
        <div class="block font-medium text-sm text-gray-700">
            Attribute
        </div>

        <div>{{ $attribute() }}</div>
    </div>
</div>
