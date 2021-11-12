<div>
    <p class="font-bold">{{ $name }}</p>

    <ul>
        <li>attribute: {{ $attribute }}</li>
        <li>column: {{ $column }}</li>
        <li>groups: @dump($groups())</li>
        <li>label: {{ $label }}</li>
        <li>rows: {{ $rows }}</li>
        <li>size: {{ $size }}</li>
        <li>structure: @dump($structure())</li>
        <li>template: {{ $template }}</li>
    </ul>
</div>