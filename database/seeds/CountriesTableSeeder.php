<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Countries::class, 50)->create()->each(function ($country) {
            $country->cities()->saveMany(factory(App\Models\Cities::class, random_int(1, 5))->make());
        });
    }
}
