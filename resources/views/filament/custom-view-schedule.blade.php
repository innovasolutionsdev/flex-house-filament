<x-filament-panels::page>

    <x-filament::app-header>
        <x-slot name="title">Schedule</x-slot>
    </x-filament::app-header>

    <x-filament::app-content>
        <x-filament::card>
            <x-slot name="header">
                <h2 class="text-lg font-semibold text-gray-900">Schedule</h2>
            </x-slot>

            <x-slot name="content">
                <div class="space-y-4">
                    <x-filament::table
                        :records="$records"
                        :columns="[
                            'name' => [
                                'label' => 'Name',
                                'sortable' => true,
                            ],
                            'email' => [
                                'label' => 'Email',
                                'sortable' => true,
                            ],
                            'phone' => [
                                'label' => 'Phone',
                                'sortable' => true,
                            ],
                            'date' => [
                                'label' => 'Date',
                                'sortable' => true,
                            ],
                            'time' => [
                                'label' => 'Time',
                                'sortable' => true,
                            ],
                        ]"
                    />
                </div>
            </x-slot>
        </x-filament::card>
    </x-filament::app-content>