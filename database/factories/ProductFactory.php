<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(2);

        $category = Category::all()->random();

        $brand = $category->brands->random();

        if($category->color){
            $quantity = null;
        } else {
            $quantity = 15;
        }

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([10500, 3700, 1200]),
            'category_id' => $category->id,
            'brand_id' => $brand->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
