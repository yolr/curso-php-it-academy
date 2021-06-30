<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\equipos;
use App\Models\partido;

class partidosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = partidos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local_gol'=>$this->faker->numberBetween($min=0,$max=5),
            'visitor_gol'=>$this->faker->numberBetween($min=0,$max=5),
            'encuentro'=>$this->faker->year($max = 'now'),
            'stadium'=>$this->faker->city(),
            'equipo_id'=>equipos::get()->random()->id,
            
            

        ];
    }
}
