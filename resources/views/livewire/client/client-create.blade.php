<div>
    <!-- Form -->
    <form wire:submit="CreateClient" class="mt-4">

        <!-- Id number -->
        <div>
            <label for="id_number" class="form-label">Id number</label>
            <input class="form-control" wire:model="form.id_number" id="id_number" type="text" name="id_number" required>
            <x-input-error :messages="$errors->get('id_number')" class="mt-2" />
        </div>

        <!-- Date of birth -->
        <div>
            <label for="date_of_birth" class="form-label">Date of birth</label>
            <x-date class="form-control" wire:model="form.date_of_birth" id="date_of_birth"/>
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <!-- First name -->
        <div>
            <label for="first_name" class="form-label">First name</label>
            <input class="form-control" wire:model="form.first_name" id="first_name" type="text" name="first_name" required>
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <!-- Last name -->
        <div>
            <label for="last_name" class="form-label">Last name</label>
            <input class="form-control" wire:model="form.last_name" id="last_name" type="text" name="last_name" required>
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <!-- Email address -->
        <div>
            <label for="email_address" class="form-label">Email address</label>
            <input class="form-control" wire:model="form.email_address" id="email_address" type="email" name="email_address" required>
            <x-input-error :messages="$errors->get('email_address')" class="mt-2" />
        </div>

        <!-- Telephone -->
        <div>
            <label for="telephone" class="form-label">Telephone</label>
            <input class="form-control" wire:model="form.telephone" id="telephone" type="text" name="telephone" required  >
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="form-label">Status</label>
            <select class="form-select" awire:model="form.status" id="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <!-- Submit -->
        <button class="mt-4 btn btn-primary">
            Save
        </button>
    </form>

</div>
