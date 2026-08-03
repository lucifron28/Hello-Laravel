@props(['title', 'variant' => 'green'])

<div {{ $attributes->merge(['class' => 'space-y-1']) }}>
    <x-badge :variant="$variant">{{ $title }}</x-badge>
    {{ $slot }}
</div>
