<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Seller;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $multiImages = [$this->faker->imageUrl('450', '450'), $this->faker->imageUrl('450', '450'), $this->faker->imageUrl('450', '450'), $this->faker->imageUrl('450', '450'), $this->faker->imageUrl('450', '450')];

        return [
            'seller_id' => $this->faker->randomElement(Seller::pluck('id')->toArray()),
            'brand_id' => $this->faker->randomElement(Brand::pluck('id')->toArray()),
            'category_id' => $this->faker->randomElement(Category::pluck('id')->toArray()),
            'sub_category_id' => $this->faker->randomElement(SubCategory::pluck('id')->toArray()),
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'thumbnail' => $this->faker->imageUrl('450', '450'),
            'iamges' => $this->faker->randomElement([$multiImages]),
            'price' => $this->faker->numberBetween(800, 3000),
            'discount' => $this->faker->numberBetween(1, 99),
            'stock' => $this->faker->numberBetween(100, 300),
            'sale' => $this->faker->randomElement([true, false]),
            'conditions' => $this->faker->randomElement(['new', 'popular', 'featurd', 'winter']),
            'added_by' => $this->faker->randomElement(['admin', 'seller']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
