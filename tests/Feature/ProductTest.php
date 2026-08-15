<?php

use App\Models\Product;

test('the products index is available', function () {
    $response = $this->get(route('products.index'));

    $response->assertOk();
});

test('a product can be created through the form request', function () {
    $response = $this->post(route('products.store'), [
        'name' => 'Hybrid Theory Vinyl',
        'description' => 'A limited-edition catalog item.',
        'price' => '1499.00',
        'stock' => 12,
        'is_active' => 1,
    ]);

    $response->assertRedirect(route('products.index'));
    $this->assertDatabaseHas('products', [
        'name' => 'Hybrid Theory Vinyl',
        'stock' => 12,
    ]);
});

test('product input is validated before it is stored', function () {
    $response = $this->from(route('products.create'))
        ->post(route('products.store'), [
            'name' => '',
            'price' => '-1',
            'stock' => '-4',
            'is_active' => 1,
        ]);

    $response->assertRedirect(route('products.create'));
    $response->assertSessionHasErrors(['name', 'price', 'stock']);
    expect(Product::count())->toBe(0);
});

test('a product can be updated and deleted through resource routes', function () {
    $product = Product::factory()->create();

    $this->put(route('products.update', $product), [
        'name' => 'Updated Product',
        'description' => 'Updated description.',
        'price' => '99.00',
        'stock' => 4,
        'is_active' => 0,
    ])->assertRedirect(route('products.show', $product));

    $this->assertDatabaseHas('products', [
        'id' => $product->id,
        'name' => 'Updated Product',
        'is_active' => 0,
    ]);

    $this->delete(route('products.destroy', $product))
        ->assertRedirect(route('products.index'));

    $this->assertDatabaseMissing('products', ['id' => $product->id]);
});
