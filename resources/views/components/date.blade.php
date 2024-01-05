<div x-data="{ value: @entangle($attributes->wire('model')), picker: undefined }"
     x-init="flatpickr($refs.input,{minDate: 'today',dateFormat: 'Y-m-d'})"
     x-on:change="value = $event.target.value"
    class="input-group">
    <span class="input-group-text">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
        </svg>
    </span>
    <input {!! $attributes->merge(['class' => '']) !!}
           x-ref="input"
           x-bind:value="value"
           autocomplete="off">
</div>
