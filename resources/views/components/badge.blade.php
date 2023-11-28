@props(['textColor', 'bgColor'])

@php
    $bgColor = match ($bgColor) {
        'gray' => 'bg-gray-100',
        'blue' => 'bg-blue-100',
        'red' => 'bg-red-100',
        'yellow' => 'bg-yellow-100',
        'pink' => 'bg-pink-100',
        'indigo' => 'bg-indigo-100',
        'purple' => 'bg-purple-100',
        'green' => 'bg-green-100',
        'lime' => 'bg-lime-100',
        default => 'bg-red-100',
    };
@endphp

<button {{ $attributes }} class="{{ $bgColor }} rounded-xl px-3 py-1 text-base">
    {{ $slot }} </button>
