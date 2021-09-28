<?php

namespace Database\Factories;

use App\Models\ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class ticketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->sentence(),
            'valorPrevisto' => $this->faker->numberBetween(50, 1000),
            'emailResponsavel' => $this->faker->email,
            'estado_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
