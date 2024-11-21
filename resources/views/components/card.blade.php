@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card']) class="card">
    {{ $slot }}
    <a href="{{ $attributes }}" class="btn">View Details</a>
</div>
