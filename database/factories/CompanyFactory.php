<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Company_Name' => $this->faker->company(),
            'Company_Sector' =>$this->faker->word(),
            'Company_Email' => $this->faker->companyEmail(),
            'Company_Phone' => $this->faker->serviceNumber(),
            'Company_Website' => $this->faker->url(),
            'ID_City' => $this->faker->numberBetween(1, 30),
        ];
    }
}
