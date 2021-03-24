<?php

namespace Database\Factories;

use App\Models\Offers;
use Illuminate\Database\Eloquent\Factories\Factory;

class OffersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Offers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(5, true),
            'duration' => $this->faker->sentence(3, true),
            'competences' => $this->faker->words(5),
            'salary' => $this->faker->randomNumber(3),
            'date' => $this->faker->date(),
            'places' => $this->faker->randomDigitNotNull(),
            'places_offer' => $this->faker->randomDigitNotNull(),
            'details' => $this->faker->text(50)



        ];
    }
}
