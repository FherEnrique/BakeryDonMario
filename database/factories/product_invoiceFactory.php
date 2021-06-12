<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\product_invoice;

class product_invoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product_invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_invoice' =>   $this->faker->numberBetween(1, 3),
            'id_product' =>   $this->faker->numberBetween(1, 20),
            'stock' =>   $this->faker->numberBetween(1, 10),
        ];
    }
}
