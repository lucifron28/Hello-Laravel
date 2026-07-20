@props(['title' => 'Linkin Park - Hybrid Theory'])
<!DOCTYPE html>
<html lang="en" class="dark h-full bg-[#090a0f] text-slate-100 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: 'class',
        theme: {
          extend: {}
        }
      }
    </script>
    <style>
        .lyric-line {
            transition: all 0.2s ease;
            padding: 0.35rem 0.75rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }
        .lyric-line:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
        }
        .lyric-line.active-line {
            background: rgba(29, 185, 84, 0.15);
            border-left: 3px solid #1DB954;
            color: #ffffff !important;
            font-weight: 600;
            padding-left: 1rem;
        }
    </style>

</head>
<body class="min-h-screen bg-[#090a0f] text-slate-200 relative flex flex-col justify-between antialiased font-sans">

    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-96 bg-gradient-to-b from-[#1DB954]/10 via-purple-600/5 to-transparent blur-3xl pointer-events-none -z-10"></div>

    <header class="w-full border-b border-white/10 bg-[#090a0f]/80 backdrop-blur-xl sticky top-0 z-50">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 font-bold text-white tracking-wide">
                <span class="w-2.5 h-2.5 rounded-full bg-[#1DB954]"></span>
                <span>Hybrid Theory</span>
            </a>
            
            <nav class="flex items-center gap-1 sm:gap-2">
                <a href="/" class="px-3 py-1.5 rounded-xl text-xs sm:text-sm font-medium transition-all {{ request()->is('/') ? 'bg-white/10 text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                    Home
                </a>
                <a href="/about" class="px-3 py-1.5 rounded-xl text-xs sm:text-sm font-medium transition-all {{ request()->is('about') ? 'bg-white/10 text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                    About
                </a>
                <a href="/contact" class="px-3 py-1.5 rounded-xl text-xs sm:text-sm font-medium transition-all {{ request()->is('contact') ? 'bg-white/10 text-white font-semibold' : 'text-slate-400 hover:text-white hover:bg-white/5' }}">
                    Contact
                </a>
            </nav>
        </div>
    </header>

    <main class="w-full max-w-2xl mx-auto px-4 sm:px-6 py-6 sm:py-8 flex-1 space-y-6">
        {{ $slot }}
    </main>

    <footer class="w-full border-t border-white/10 py-6 text-center text-xs text-slate-500 font-mono">
        <div class="max-w-2xl mx-auto px-4">
            <p>&copy; {{ date('Y') }} Linkin Park &bull; Hybrid Theory</p>
        </div>
    </footer>

</body>
</html>