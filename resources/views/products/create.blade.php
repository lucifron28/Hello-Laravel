<x-layout title="New Product - Hybrid Theory">
    <x-card class="space-y-6">
        <div>
            <a href="{{ route('products.index') }}" class="link link-info text-sm">← Back to products</a>
            <div class="mt-4">
                <p class="mb-2 text-xs font-mono uppercase tracking-[0.3em] text-cyan-300/70">Catalog workspace</p>
                <x-page-heading>Create product</x-page-heading>
                <p class="mt-2 text-slate-400">Add a product and validate it before it reaches the database.</p>
            </div>
        </div>

        @include('products._form', ['product' => $product])
    </x-card>
</x-layout>
