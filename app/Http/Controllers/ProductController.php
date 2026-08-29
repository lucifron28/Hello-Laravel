<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $products = $request->user()->products()->latest()->paginate(9);

        return view('products.index', compact('products'));
    }

    public function create(): View
    {
        return view('products.create', [
            'product' => new Product(),
        ]);
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $request->user()->products()->create($request->validated());

        return to_route('products.index')->with('status', 'Product created successfully.');
    }

    public function show(Product $product): View
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product): View
    {
        Gate::authorize('update', $product);

        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        Gate::authorize('update', $product);

        $product->update($request->validated());

        return to_route('products.show', $product)->with('status', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        Gate::authorize('delete', $product);

        $product->delete();

        return to_route('products.index')->with('status', 'Product deleted successfully.');
    }
}
