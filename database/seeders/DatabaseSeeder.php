<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user->products()->createMany([
            [
                'name' => 'Hybrid Theory Vinyl Record',
                'description' => 'A 180-gram vinyl pressing for collectors and longtime fans.',
                'price' => 1499.00,
                'stock' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Black Logo Hoodie',
                'description' => 'A heavyweight cotton hoodie with a subtle embroidered logo.',
                'price' => 2299.00,
                'stock' => 18,
                'is_active' => true,
            ],
            [
                'name' => 'Hybrid Theory Graphic T-Shirt',
                'description' => 'A soft cotton shirt featuring the classic album artwork.',
                'price' => 899.00,
                'stock' => 35,
                'is_active' => true,
            ],
            [
                'name' => 'Limited Edition Tour Poster',
                'description' => 'A numbered art print sized for easy framing and display.',
                'price' => 599.00,
                'stock' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Logo Trucker Cap',
                'description' => 'A structured cap with an adjustable back and front logo patch.',
                'price' => 749.00,
                'stock' => 24,
                'is_active' => true,
            ],
            [
                'name' => 'Everyday Canvas Tote',
                'description' => 'A sturdy reusable tote for records, books, and daily essentials.',
                'price' => 449.00,
                'stock' => 40,
                'is_active' => true,
            ],
        ]);
    }
}
