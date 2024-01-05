<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="h2 font-weight-bold text-dark">
                Dashboard
            </h2>
            <div>
                <a href="{{ route('clients.create') }}" class="btn btn-primary text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"></path>
                    </svg>
                    Client
                </a>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="container mx-auto px-4">
            <livewire:client.client-index />
        </div>
    </div>
</x-app-layout>

