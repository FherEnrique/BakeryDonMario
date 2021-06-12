<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\client;
use App\Models\invoice;
use App\Models\product;
use App\Models\product_invoice;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        admin::factory(5)->create();
        client::factory(20)->create();
        product::factory(20)->create();
        invoice::factory(3)->create();
        product_invoice::factory(20)->create();
    }
}
