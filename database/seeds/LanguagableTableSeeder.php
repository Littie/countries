<?php

use App\Models\Countries;
use App\Models\Languages;
use Illuminate\Database\Seeder;

class LanguagableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Languages::all();
        $countries = Countries::all();

        $countries->each(function ($country) use ($languages) {
            $rand = random_int(1, 2);

            for ($i = 0; $i < $rand; $i++) {
                $language = $languages->random();
                $languages->forget($language->getKey());

                $country->languages()->attach($language);

                if (random_int(0, 1)) {
                    $language = $languages->random();
                    $country->cities->random()->languages()->attach($language);
                }
            }
        });
    }
}
