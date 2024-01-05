<div x-data="{ showAlert: false, message: '', alertType: '' }">
    <div class="container">
        <div class="row">
            <div class="col-8">
                @if(session()->has('deleted'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('deleted') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-7">
                <input wire:model.live="search"
                       class="form-control"
                       type="search"
                       placeholder="Search by first & last name, email address and/or telephone">
            </div>
        </div>
    </div>
    <div class="mt-4 card shadow-sm">
        <div class="card-body text-dark">
            <table class="mt-5 table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id number</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">First name</th>
                    <th scope="col">Last name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>
                @forelse($clients as $client)
                    <livewire:client.client-row :client="$client" :key="$client->id"/>
                @empty
                    <tr>
                        <td colspan="8">No clients found.</td>
                    </tr>
                @endforelse
                </tbody>

            </table>

            <div class="mt-2">
                {{ $clients->links() }}
            </div>
        </div>
    </div>
</div>
