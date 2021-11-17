<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @for($i = 1; $i < 4; $i++)
        <div class="grid grid-cols-2 md:grid-cols-1 lg:grid-cols-2 gap-4">
            <x-fields.text
                :name="$this->fieldName($i . '.name')"
                id="fast-fields--{{ $this->fieldName($i . '.name') }}"
                label="Weapon {{ $i }} Name"
            />

            <x-fields.text
                :name="$this->fieldName($i . '.atk_bonus')"
                id="fast-fields--{{ $this->fieldName($i . '.atk_bonus') }}"
                label="Atk Bonus"
            />

            <div
                class="col-span-2 md:col-auto lg:col-span-2"
                id="fast-fields--{{ $this->fieldName($i . '.damage_type') }}"
            >
                <label
                    for="{{ $this->fieldName($i . '.damage_type') }}"
                    class="block font-medium text-sm text-gray-700"
                >
                    Damage/Type
                </label>

                <input
                    type="text"
                    id="{{ $this->fieldName($i . '.damage_type') }}"
                    wire:model.debounce.500ms="{{ $this->fieldName($i . '.damage_type') }}"
                    class="
                        border-gray-300 focus:border-indigo-300 focus:ring w-full
                        focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm
                    "
                />
            </div>
        </div>
    @endfor
</div>
