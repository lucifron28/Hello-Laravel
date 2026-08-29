@props(['product'])

<article class="card border border-white/10 bg-slate-900/70 shadow-2xl transition hover:-translate-y-1 hover:border-cyan-300/30">
    <div class="card-body gap-4">
        <div class="flex items-start justify-between gap-4">
            <div>
                <p class="mb-1 text-xs font-mono uppercase tracking-[0.25em] text-cyan-300/70">Catalog item</p>
                <h2 class="card-title text-xl text-white">{{ $product->name }}</h2>
            </div>
            <span class="badge {{ $product->is_active ? 'badge-success' : 'badge-ghost' }}">
                {{ $product->is_active ? 'Active' : 'Draft' }}
            </span>
        </div>

        <p class="min-h-16 text-sm leading-6 text-slate-300">
            {{ $product->description ?: 'No description added yet.' }}
        </p>

        <div class="flex items-end justify-between gap-4 border-t border-white/10 pt-4">
            <div>
                <p class="text-xs uppercase tracking-widest text-slate-500">Price</p>
                <p class="text-2xl font-bold text-cyan-200">₱{{ number_format((float) $product->price, 2) }}</p>
            </div>
            <div class="text-right">
                <p class="text-xs uppercase tracking-widest text-slate-500">Stock</p>
                <p class="font-semibold text-white">{{ number_format($product->stock) }}</p>
            </div>
        </div>

        <div class="card-actions mt-2 justify-end">
            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-primary">View</a>
            @can('update', $product)
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline">Edit</a>
            @endcan
        </div>
    </div>
</article>
