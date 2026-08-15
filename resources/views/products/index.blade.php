<x-layout title="Products - Hybrid Theory">
    <div class="space-y-8">
        @if(session('status'))
            <div role="status" class="alert alert-success border-emerald-300/20 bg-emerald-400/10 text-emerald-100">
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="mb-2 text-xs font-mono uppercase tracking-[0.3em] text-cyan-300/70">Inventory workspace</p>
                <x-page-heading>Products</x-page-heading>
                <p class="mt-2 max-w-xl text-slate-400">A small CRUD catalog built with Laravel forms, Eloquent, RESTful routes, and request validation.</p>
            </div>
            <a href="{{ route('products.create') }}" class="btn btn-primary shrink-0">+ New product</a>
        </div>

        @if($products->count())
            <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>

            <div class="flex justify-center">
                {{ $products->links() }}
            </div>
        @else
            <x-card class="border-dashed text-center">
                <p class="text-lg font-semibold text-white">No products yet</p>
                <p class="mt-2 text-slate-400">Create your first catalog item to exercise the form and validation flow.</p>
                <a href="{{ route('products.create') }}" class="btn btn-primary mt-5">Create a product</a>
            </x-card>
        @endif
    </div>
</x-layout>
