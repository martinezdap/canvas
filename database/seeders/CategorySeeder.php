<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '<i class="fa-solid fa-paw"></i>',
                'color' => true
            ],
            [
                'name' => 'Alimentos',
                'slug' => Str::slug('Alimentos'),
                'icon' => '<i class="fa-solid fa-bowl-rice"></i>'
            ],
            [
                'name' => 'Collares y pecheras',
                'slug' => Str::slug('Collares y pecheras'),
                'icon' => '<i class="fa-solid fa-dog"></i>',
                'color' => true,
                'size' => true
            ],
            [
                'name' => 'Higiene',
                'slug' => Str::slug('Higiene'),
                'icon' => '<i class="fa-solid fa-pump-soap"></i>'
            ],
            [
                'name' => 'Snacks',
                'slug' => Str::slug('Snacks'),
                'icon' => '<i class="fa-sharp fa-solid fa-bone"></i>'
            ],
            [
                'name' => 'Vestimenta canina',
                'slug' => Str::slug('Vestimenta canina'),
                'icon' => '<i class="fa-sharp fa-solid fa-shirt"></i>',
                'color' => true,
                'size' => true
            ]
        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
