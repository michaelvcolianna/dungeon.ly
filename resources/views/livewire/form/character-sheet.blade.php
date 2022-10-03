@if($character)
    <div class="grid gap-4">
        @foreach($groups as $group => $fields)
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1 flex justify-between">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium text-gray-900">{{ $this->buildLabel($group) }}</h3>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-md">
                        <div class="grid grid-cols-6 gap-6">
                            @foreach($fields as $field => $config)
                                <div class="col-span-6 sm:col-span-4">
                                    @if($this->isRegular($config))
                                        <x-form.field :name="$field" :config="$config" />
                                    @else
                                        <livewire:is :component="$this->componentName($config)" :name="$field" :config="$config" />
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-6 sm:px-20 bg-white">
            <div class="mt-8 text-2xl">
                No Character Selected
            </div>

            <div class="mt-6 text-gray-500">
                It looks like you haven't chosen a character from the dashboard.
            </div>

            <div class="mt-6">
                <x-jet-button wire:click="goToDashboard">Go There</x-jet-button>
            </div>
        </div>
    </div>
@endif
