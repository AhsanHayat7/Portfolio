><?php
     $faker->define(App\Models\Todo::class, function (Faker\Generator $faker)
     {
         return [
             //
             'todos'=> $faker->sentence(10)
         ];
     });




