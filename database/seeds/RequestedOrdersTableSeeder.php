<?php

use Illuminate\Database\Seeder;

class RequestedOrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RequestedOrder::class, 200)->create();
    }
}
