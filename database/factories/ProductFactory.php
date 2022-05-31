<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->text(30),
            'value'=>$this->faker->randomNumber(3),
            'slug'=>$this->faker->slug(),
            'category_id' => Category::factory(),
            'image'=>"https://www.pngall.com/wp-content/uploads/2/White-Sneakers-PNG-Clipart.png"
        ];
    }
}
