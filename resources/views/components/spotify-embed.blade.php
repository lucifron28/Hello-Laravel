@props(['trackId'])

<div {{ $attributes->merge(['class' => 'w-full rounded-2xl overflow-hidden shadow-2xl border border-white/10 bg-slate-900/50 p-1']) }}>
    <iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/track/{{ $trackId }}?utm_source=generator&si=ea77dc9575db4d5f" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
</div>
