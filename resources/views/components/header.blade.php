<header class="w-full border-b border-white/10 bg-[#090a0f]/80 backdrop-blur-xl sticky top-0 z-50">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 h-16 flex items-center justify-between">
        <a href="/" class="flex items-center gap-2 font-bold text-white tracking-wide">
            <span class="w-2.5 h-2.5 rounded-full bg-[#1DB954]"></span>
            <span>Hybrid Theory</span>
        </a>
        
        <nav class="flex flex-wrap items-center justify-end gap-1 sm:gap-2">
            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
            <x-nav-link href="{{ url('/about') }}" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="{{ route('products.index') }}" :active="request()->is('products*')">Products</x-nav-link>

            @guest
                <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">Login</x-nav-link>
                <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">Register</x-nav-link>
            @endguest

            @auth
                @can('view-admin')
                    <x-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">Admin</x-nav-link>
                @endcan

                <form method="POST" action="{{ route('logout') }}" class="ml-1">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm text-slate-300 hover:text-white">Logout</button>
                </form>
            @endauth
        </nav>
    </div>
</header>
