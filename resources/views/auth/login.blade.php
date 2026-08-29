<x-layout title="Login - Hybrid Theory">
    <x-card class="space-y-6">
        <div>
            <p class="mb-2 text-xs font-mono uppercase tracking-[0.3em] text-cyan-300/70">Account access</p>
            <x-page-heading>Log in</x-page-heading>
            <p class="mt-2 text-slate-400">Log in to view and manage your products.</p>
        </div>

        <form method="POST" action="{{ route('login.authenticate') }}" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="label mb-1 block text-sm font-semibold text-slate-200">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
                <x-form-error field="email" />
            </div>

            <div>
                <label for="password" class="label mb-1 block text-sm font-semibold text-slate-200">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
                <x-form-error field="password" />
            </div>

            <button type="submit" class="btn btn-primary w-full">Log in</button>
        </form>

        <p class="text-center text-sm text-slate-400">
            Need an account?
            <a href="{{ route('register') }}" class="link link-info">Register</a>
        </p>
    </x-card>
</x-layout>
