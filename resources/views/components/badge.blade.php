@props(['variant' => 'green'])

@php
$variants = [
    'green' => 'bg-[#1DB954]/10 border-[#1DB954]/30 text-[#1DB954]',
    'purple' => 'bg-purple-500/10 border-purple-500/30 text-purple-400',
    'pink' => 'bg-pink-500/10 border-pink-500/30 text-pink-400',
    'amber' => 'bg-amber-500/10 border-amber-500/30 text-amber-400',
];
$variantClasses = $variants[$variant] ?? $variants['green'];
@endphp

<span {{ $attributes->merge(['class' => "inline-block px-2.5 py-0.5 rounded-md border text-[11px] font-mono mb-1 {$variantClasses}"]) }}>
    {{ $slot }}
</span>
