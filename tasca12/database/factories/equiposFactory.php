<?php

namespace Database\Factories;

use App\Models\equipos;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\partido;


class equiposFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = equipos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stadium'=>$this->faker->company(),
            'foundation_year'=>$this->faker->year($max = 'now'),
            'city'=>$this->faker->city(),
            
        ];
    }
}
