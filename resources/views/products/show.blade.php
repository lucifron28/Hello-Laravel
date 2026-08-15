<x-layout title="{{ $product->name }} - Hybrid Theory">
    <x-card class="space-y-8">
        @if(session('status'))
            <div role="status" class="alert alert-success border-emerald-300/20 bg-emerald-400/10 text-emerald-100">
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">
            <div>
                <a href="{{ route('products.index') }}" class="link link-info text-sm">← Back to products</a>
                <div class="mt-4 flex items-center gap-3">
                    <x-page-heading>{{ $product->name }}</x-page-heading>
                    <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-ghost' }}">
                        {{ $product->is_active ? 'Active' : 'Draft' }}
                    </span>
                </div>
                <p class="mt-3 max-w-2xl leading-7 text-slate-300">{{ $product->description ?: 'No description added yet.' }}</p>
            </div>
            <a href="{{ route('products.edit', $product) }}" class="btn btn-outline shrink-0">Edit product</a>
        </div>

        <div class="grid gap-4 border-y border-white/10 py-6 sm:grid-cols-2">
            <div class="rounded-2xl bg-slate-950/50 p-5">
                <p class="text-xs uppercase tracking-widest text-slate-500">Price</p>
                <p class="mt-2 text-3xl font-bold text-cyan-200">₱{{ number_format((float) $product->price, 2) }}</p>
            </div>
            <div class="rounded-2xl bg-slate-950/50 p-5">
                <p class="text-xs uppercase tracking-widest text-slate-500">Available stock</p>
                <p class="mt-2 text-3xl font-bold text-white">{{ number_format($product->stock) }}</p>
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-4">
            <p class="text-sm text-slate-500">Added {{ $product->created_at->format('M j, Y') }}</p>
            <form method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Delete this product?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-error btn-outline">Delete product</button>
            </form>
        </div>
    </x-card>
</x-layout>
