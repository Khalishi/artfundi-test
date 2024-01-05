<tr>
    <th scope="row">{{ $client->id_number }}</th>
    <td>{{ $client->date_of_birth }}</td>
    <td>{{ $client->first_name }}</td>
    <td>{{ $client->last_name }}</td>
    <td>{{ $client->email_address }}</td>
    <td>{{ $client->telephone }}</td>
    <td>
        @if($client->status == 'active')
            <span class="badge text-bg-success">Active</span>
        @else
            <span class="badge text-bg-secondary">Inactive</span>
        @endif
    </td>
    <td>
        <a href="{{route('client.edit',$client)}}" class="btn btn-light">Edit</a>

        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{$client->id}}">
            Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop-{{$client->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-{{$client->id}}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel-{{$client->id}}">
                            Delete client
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this client?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" wire:click="deleteClient" wire:loading.attr="disabled" class="btn btn-danger">Delete client</button>
                    </div>
                </div>
            </div>
        </div>
    </td>

</tr>
