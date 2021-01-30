<?php

namespace Database\Factories;

use App\Models\LoaiTin;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoaiTinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LoaiTin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'slug' => $this->faker->slug,
            'order' => $this->faker->randomDigit,
            'status' => $this->faker->randomDigit,
            'theloai_id' => 1
        ];
    }
}
