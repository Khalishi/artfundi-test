<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }
}; ?>

<div class="container">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-xl-4 my-5">
            <a href="/" wire:navigate>
                <x-application-logo />
            </a>

            <!-- Form -->
            <form wire:submit="login" class="mt-4">

                <!-- Email Address -->

                <div>
                    <label for="email" class="form-label text-white">Email</label>
                    <input class="form-control" wire:model="form.email" id="email" type="email" name="email" required autofocus autocomplete="username" >
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="form-label text-white">Password</label>
                    <input class="form-control" wire:model="form.password" id="password"
                           type="password"
                           name="password"
                           required autocomplete="current-password">

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Submit -->
                <button class="mt-4 btn btn-lg w-100 btn-primary">
                    Sign in
                </button>

            </form>

        </div>
    </div> <!-- / .row -->
</div> <!-- / .container -->

