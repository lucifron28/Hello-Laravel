@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}"
   {{ $attributes->class([
       'px-3 py-1.5 rounded-xl text-xs sm:text-sm font-medium transition-all',
       'bg-white/10 text-white font-semibold' => $active,
       'text-slate-400 hover:text-white hover:bg-white/5' => !$active,
   ]) }}>
    {{ $slot }}
</a>
