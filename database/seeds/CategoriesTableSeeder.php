<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('category')->insert([
                'name' => $faker->name,
                'slug' => $faker->unique()->email,
                'status' => $faker->unique()->email,
                'contact_number' => $faker->phoneNumber,
            ]);
        }
    }
}
