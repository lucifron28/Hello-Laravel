<x-layout title="Edit {{ $product->name }} - Hybrid Theory">
    <x-card class="space-y-6">
        <div>
            <a href="{{ route('products.show', $product) }}" class="link link-info text-sm">← Back to product</a>
            <div class="mt-4">
                <p class="mb-2 text-xs font-mono uppercase tracking-[0.3em] text-cyan-300/70">Catalog workspace</p>
                <x-page-heading>Edit product</x-page-heading>
                <p class="mt-2 text-slate-400">Update the product details, stock, or availability.</p>
            </div>
        </div>

        @include('products._form', ['product' => $product])
    </x-card>
</x-layout>
