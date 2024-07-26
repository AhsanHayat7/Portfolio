<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for( $i = 1; $i <= 10; $i++ ){
        $faker = Faker::create();
        $todo = new Todo;
        $todo->todo = $faker->name;
        $todo->completed = $faker->boolean;
        $todo->save();
        }
    }

}

