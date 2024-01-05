@props(['status'])

<div x-data="{ active: {{$status}} }">
    <button type="button" :class="{'custom-toggle--active': active, 'custom-toggle': !active}" {{ $attributes }}
    role="switch"
            tabindex="0"
            class="custom-toggle-base"
            :aria-checked="active">
        <span class="custom-toggle-circle"></span>
    </button>
</div>
