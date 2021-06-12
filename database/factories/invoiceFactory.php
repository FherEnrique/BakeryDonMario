<?php

namespace Database\Factories;

use App\Models\invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class invoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_client' =>   $this->faker->numberBetween(1, 20),
        ];
    }
}
