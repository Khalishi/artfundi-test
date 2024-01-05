<x-app-layout>
    <x-slot name="header">
        <h2 class="h2 font-weight-bold text-dark">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="container mx-auto px-4">
            <div class="card shadow-sm">
                <div class="card-body text-dark">
                    <livewire:client.client-index />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

