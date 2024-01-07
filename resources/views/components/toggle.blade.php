<!-- toggle.blade.php -->

<style>
    .custom-toggle {
        background-color: #e2e8f0; /* Bootstrap equivalent of bg-gray-200 */
        display: inline-flex;
        align-items: center;
        justify-content: start;
        width: 2.75rem; /* Approximate width */
        height: 1.5rem; /* Approximate height */
        padding: 0.25rem;
        border-radius: 9999px; /* Full rounded */
        border: 2px solid transparent;
        transition: background-color 0.2s ease-in-out;
    }

    .custom-toggle-button {
        width: 1.25rem; /* Circle width */
        height: 1.25rem; /* Circle height */
        background-color: #ffffff; /* White background */
        border-radius: 50%; /* Full rounded */
        transition: transform 0.2s ease-in-out;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.2); /* Shadow effect */
    }

    .custom-toggle.on {
        background-color: #4c51bf; /* Bootstrap equivalent of bg-indigo-600 */
        justify-content: end;
    }
</style>

<button type="button"
        class="custom-toggle"
        x-data="{ on: @entangle($attributes->wire('model')) }"
        role="switch"
        aria-checked="false"
        :aria-checked="on.toString()"
        @click="on = !on"
        :class="{ 'on': on }">
    <span aria-hidden="true"
          class="custom-toggle-button"
          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }">
    </span>
</button>
