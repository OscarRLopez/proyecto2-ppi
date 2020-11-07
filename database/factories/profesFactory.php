<?php

namespace Database\Factories;

use App\Models\profes;
use Illuminate\Database\Eloquent\Factories\Factory;

class profesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = profes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word,
        'Email' => $this->faker->word,
        'Score' => $this->faker->randomDigitNotNull
        ];
    }
}
