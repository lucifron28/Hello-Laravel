<x-layout title="Crawling - Linkin Park">
    
    <x-card class="p-5 sm:p-6 flex flex-col sm:flex-row items-center justify-between gap-5">
        <div class="flex items-center gap-4 w-full sm:w-auto">
            <div class="relative w-20 h-20 sm:w-24 sm:h-24 rounded-2xl overflow-hidden shadow-lg border border-white/10 shrink-0">
                <img src="{{ asset('images/cover.jpg') }}" onerror="this.src='https://upload.wikimedia.org/wikipedia/en/2/2a/Linkin_Park_Hybrid_Theory_Album_Cover.jpg'" alt="Linkin Park - Hybrid Theory Album Cover" class="w-full h-full object-cover">
            </div>
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <x-badge variant="green" class="rounded-full bg-[#1DB954]/15 mb-0">Hybrid Theory</x-badge>
                    <span class="text-xs text-slate-400 font-mono">2000</span>
                </div>
                <x-page-heading>Crawling</x-page-heading>
                <p class="text-slate-400 font-medium text-sm sm:text-base">Linkin Park</p>
            </div>
        </div>

        <x-spotify-button href="https://open.spotify.com/track/57BrRMwf9LrcmuOsyGilwr" />
    </x-card>

    <x-spotify-embed trackId="57BrRMwf9LrcmuOsyGilwr" />

    <x-card class="space-y-6">
        
        <div class="pb-4 border-b border-white/10">
            <h2 class="text-xl font-bold text-white tracking-tight">Lyrics</h2>
        </div>

        <div class="space-y-6 text-base sm:text-lg text-slate-300 leading-relaxed">
            
            <x-lyric-section title="Chorus" variant="green">
                <p class="lyric-line">Crawling in my skin</p>
                <p class="lyric-line">These wounds, they will not heal</p>
                <p class="lyric-line">Fear is how I fall</p>
                <p class="lyric-line">Confusing what is real</p>
            </x-lyric-section>

            <x-lyric-section title="Verse 1" variant="purple">
                <p class="lyric-line">There's something inside me that pulls beneath the surface</p>
                <p class="lyric-line text-slate-400 italic">Consuming, confusing</p>
                <p class="lyric-line">This lack of self control I fear is never ending</p>
                <p class="lyric-line text-slate-400 italic">Controlling</p>
                <p class="lyric-line">I can't seem</p>
                <p class="lyric-line">To find myself again</p>
                <p class="lyric-line">My walls are closing in</p>
            </x-lyric-section>

            <x-lyric-section title="Pre-Chorus" variant="pink">
                <p class="lyric-line text-slate-400">(Without a sense of confidence, I'm convinced)</p>
                <p class="lyric-line text-slate-400">(That there's just too much pressure to take)</p>
                <p class="lyric-line">I've felt this way before</p>
                <p class="lyric-line font-medium text-pink-300">So insecure</p>
            </x-lyric-section>

            <x-lyric-section title="Chorus" variant="green">
                <p class="lyric-line">Crawling in my skin</p>
                <p class="lyric-line">These wounds, they will not heal</p>
                <p class="lyric-line">Fear is how I fall</p>
                <p class="lyric-line">Confusing what is real</p>
            </x-lyric-section>

            <x-lyric-section title="Verse 2" variant="purple">
                <p class="lyric-line">Discomfort, endlessly has pulled itself upon me</p>
                <p class="lyric-line text-slate-400 italic">Distracting, reacting</p>
                <p class="lyric-line">Against my will I stand beside my own reflection</p>
                <p class="lyric-line text-slate-400 italic">It's haunting</p>
                <p class="lyric-line">How I can't seem</p>
                <p class="lyric-line">To find myself again</p>
                <p class="lyric-line">My walls are closing in</p>
            </x-lyric-section>

            <x-lyric-section title="Pre-Chorus" variant="pink">
                <p class="lyric-line text-slate-400">(Without a sense of confidence, I'm convinced)</p>
                <p class="lyric-line text-slate-400">(That there's just too much pressure to take)</p>
                <p class="lyric-line">I've felt this way before</p>
                <p class="lyric-line font-medium text-pink-300">So insecure</p>
            </x-lyric-section>

            <x-lyric-section title="Chorus" variant="green">
                <p class="lyric-line">Crawling in my skin</p>
                <p class="lyric-line">These wounds, they will not heal</p>
                <p class="lyric-line">Fear is how I fall</p>
                <p class="lyric-line">Confusing what is real</p>
                <p class="lyric-line">Crawling in my skin</p>
                <p class="lyric-line">These wounds, they will not heal</p>
                <p class="lyric-line">Fear is how I fall</p>
                <p class="lyric-line">Confusing, confusing what is real</p>
            </x-lyric-section>

            <x-lyric-section title="Outro" variant="amber" class="pt-3 border-t border-white/10">
                <p class="lyric-line">There's something inside me that pulls beneath the surface</p>
                <p class="lyric-line">Consuming <span class="text-slate-400 italic">(confusing what is real)</span></p>
                <p class="lyric-line">This lack of self control I fear is never ending</p>
                <p class="lyric-line">Controlling <span class="text-slate-400 italic">(confusing what is real)</span></p>
            </x-lyric-section>

        </div>

    </x-card>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const lines = document.querySelectorAll('.lyric-line');
        lines.forEach(l => {
            l.addEventListener('click', () => {
                lines.forEach(item => item.classList.remove('active-line'));
                l.classList.add('active-line');
            });
        });
    });
    </script>
</x-layout>
