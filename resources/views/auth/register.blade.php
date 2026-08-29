<x-layout title="Register - Hybrid Theory">
    <x-card class="space-y-6">
        <div>
            <p class="mb-2 text-xs font-mono uppercase tracking-[0.3em] text-cyan-300/70">Account access</p>
            <x-page-heading>Create an account</x-page-heading>
            <p class="mt-2 text-slate-400">Register to manage your own products.</p>
        </div>

        <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="label mb-1 block text-sm font-semibold text-slate-200">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
                <x-form-error field="name" />
            </div>

            <div>
                <label for="email" class="label mb-1 block text-sm font-semibold text-slate-200">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
                <x-form-error field="email" />
            </div>

            <div>
                <label for="password" class="label mb-1 block text-sm font-semibold text-slate-200">Password</label>
                <input id="password" name="password" type="password" required autocomplete="new-password"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
                <x-form-error field="password" />
            </div>

            <div>
                <label for="password_confirmation" class="label mb-1 block text-sm font-semibold text-slate-200">Confirm password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                    class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500">
            </div>

            <button type="submit" class="btn btn-primary w-full">Register</button>
        </form>

        <p class="text-center text-sm text-slate-400">
            Already have an account?
            <a href="{{ route('login') }}" class="link link-info">Log in</a>
        </p>
    </x-card>
</x-layout>
