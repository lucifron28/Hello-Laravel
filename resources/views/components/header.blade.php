<header class="w-full border-b border-white/10 bg-[#090a0f]/80 backdrop-blur-xl sticky top-0 z-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 font-bold text-white tracking-wide">
            <span class="w-2.5 h-2.5 rounded-full bg-[#1DB954]"></span>
            <span>Hybrid Theory</span>
        </a>
        
        <nav class="flex items-center gap-1 sm:gap-2">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="/products" :active="request()->is('products*')">Products</x-nav-link>
        </nav>
    </div>
</header>
