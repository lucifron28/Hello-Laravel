<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Hybrid Theory Vinyl Record',
                'Black Logo Hoodie',
                'Hybrid Theory Graphic T-Shirt',
                'Limited Edition Tour Poster',
                'Classic Logo Trucker Cap',
                'Everyday Canvas Tote',
            ]),
            'description' => fake()->randomElement([
                'A heavyweight everyday essential with a clean album-inspired design.',
                'A comfortable collectible made for concerts, weekends, and daily wear.',
                'A limited-run catalog item printed on durable materials for longtime fans.',
                'A practical accessory with a simple design that works anywhere.',
            ]),
            'price' => fake()->randomFloat(2, 399, 2499),
            'stock' => fake()->numberBetween(0, 40),
            'is_active' => fake()->boolean(90),
        ];
    }
}
