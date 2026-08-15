@props(['title' => 'Linkin Park - Hybrid Theory'])
<!DOCTYPE html>
<html lang="en" class="dark h-full bg-[#090a0f] text-slate-100 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />
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

    <x-header />

    <main class="w-full max-w-2xl mx-auto px-4 sm:px-6 py-6 sm:py-8 flex-1 space-y-6">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
