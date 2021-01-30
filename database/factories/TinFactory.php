<?php

namespace Database\Factories;

use App\Models\Tin;
use Illuminate\Database\Eloquent\Factories\Factory;

class TinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'tieu_de' => $this->faker->text () ,
            'slug' => $this->faker->slug,
            'tom_tat'  => $this->faker->text () ,
            'view' => 1 ,
            'status' => $this->faker->RandomElement($array = array('0','1')),
            'user_id' => 1,
            'theloai_id' => 1,
            'loaitin_id' => 1
        ];
    }
}
