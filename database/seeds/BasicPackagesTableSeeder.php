<?php

use Illuminate\Database\Seeder;

class BasicPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\BasicPackage::class, 200)->create();
    }
}
