<?php

namespace Database\Factories;

use App\Models\equipos;
use App\Models\partido;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Model;

class partidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = partido::class;

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
            'encuentro'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'equipo_id'=>equipos::get()->random()->id,
        
            
            
            'city'=>equipos::get()->random()->city,
            //
        ];
    }
}
