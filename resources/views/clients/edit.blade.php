<x-app-layout>
    <x-slot name="header">
        <h2 class="h2 font-weight-bold text-dark">
            {{ __('Edit Client') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="container mx-auto px-4 bg-white">
            <div class="row">
                <div class="col-8">
                    <livewire:client.client-edit :client="$client" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
