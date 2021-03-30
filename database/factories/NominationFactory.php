<?php

namespace Database\Factories;

use App\Models\Nomination;
use Illuminate\Database\Eloquent\Factories\Factory;

class NominationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nomination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Step' => $this->faker->numberBetween(1, 6),
            'ID_Student' => $this->faker->numberBetween(1, 1),
            'ID_Offer' => $this->faker->numberBetween(1, 100),
        ];
    }
}
