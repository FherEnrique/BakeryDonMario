<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Product;
use App\Models\ProductInvoice;
use App\Models\User;
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
        User::factory(5)->create();
        Client::factory(20)->create();
        Product::factory(20)->create();
        Invoice::factory(3)->create();
        ProductInvoice::factory(20)->create();
    }
}
