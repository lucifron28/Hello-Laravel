@php
    $isEdit = $product->exists;
    $isActive = (int) old('is_active', $isEdit ? (int) $product->is_active : 1);
@endphp

<form method="POST" action="{{ $isEdit ? route('products.update', $product) : route('products.store') }}" class="space-y-6">
    @csrf

    @if($isEdit)
        @method('PUT')
    @endif

    <div class="grid gap-6 sm:grid-cols-2">
        <div class="sm:col-span-2">
            <label for="name" class="label mb-1 block text-sm font-semibold text-slate-200">Product name</label>
            <input id="name" name="name" type="text" value="{{ old('name', $product->name) }}" required autofocus
                class="input input-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500"
                placeholder="e.g. Hybrid Theory Vinyl">
            <x-form-error field="name" />
        </div>

        <div class="sm:col-span-2">
            <label for="description" class="label mb-1 block text-sm font-semibold text-slate-200">Description</label>
            <textarea id="description" name="description" rows="5"
                class="textarea textarea-bordered w-full bg-slate-950/70 text-white placeholder:text-slate-500"
                placeholder="Describe the product for your catalog...">{{ old('description', $product->description) }}</textarea>
            <x-form-error field="description" />
        </div>

        <div>
            <label for="price" class="label mb-1 block text-sm font-semibold text-slate-200">Price</label>
            <input id="price" name="price" type="number" value="{{ old('price', $product->price) }}" min="0" max="99999999.99" step="0.01" required
                class="input input-bordered w-full bg-slate-950/70 text-white"
                placeholder="0.00">
            <x-form-error field="price" />
        </div>

        <div>
            <label for="stock" class="label mb-1 block text-sm font-semibold text-slate-200">Stock quantity</label>
            <input id="stock" name="stock" type="number" value="{{ old('stock', $product->stock) }}" min="0" max="1000000" required
                class="input input-bordered w-full bg-slate-950/70 text-white"
                placeholder="0">
            <x-form-error field="stock" />
        </div>
    </div>

    <label class="flex cursor-pointer items-center gap-3 rounded-2xl border border-white/10 bg-slate-950/40 p-4">
        <input type="hidden" name="is_active" value="0">
        <input type="checkbox" name="is_active" value="1" class="toggle toggle-primary" @checked($isActive === 1)>
        <span>
            <span class="block font-semibold text-white">Available for sale</span>
            <span class="block text-sm text-slate-400">Inactive products remain in the catalog as drafts.</span>
        </span>
    </label>
    <x-form-error field="is_active" />

    <div class="flex flex-wrap items-center justify-end gap-3 border-t border-white/10 pt-6">
        <a href="{{ $isEdit ? route('products.show', $product) : route('products.index') }}" class="btn btn-ghost">Cancel</a>
        <button type="submit" class="btn btn-primary">{{ $isEdit ? 'Save changes' : 'Create product' }}</button>
    </div>
</form>
