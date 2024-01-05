<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container-fluid mx-auto px-4">
        <!-- Logo -->
        <a class="navbar-brand text-white" href="{{ route('dashboard') }}" wire:navigate>
            <x-application-logo />
        </a>

        <!-- Hamburger Menu for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <!-- Primary Navigation Menu -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('dashboard') }}" wire:navigate>{{ __('Dashboard') }}</a>
                </li>
            </ul>

            <!-- Settings Dropdown -->
            <ul class="navbar-nav">
                <li>
                    <button wire:click="logout" class="btn btn-outline-light me-2">Log Out</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

