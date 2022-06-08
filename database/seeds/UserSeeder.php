<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Factory\UserFactory;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //UserFactory::factory()->count(50)->create();

        factory(App\User::class, 50)->create();
    }
}
