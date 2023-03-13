<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// MODELS
use App\Models\Train;

// HELPERS
 use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        $trainCompanies = ['Trenitalia', 'Italo', 'Ferrovie Nord Milano', 'Ferrovie del Sud Est', 'Ferrovie dello Stato Italiane'];
        $cities = ['Rome', 'Milan', 'Naples', 'Turin', 'Palermo', 'Genoa', 'Bologna', 'Florence', 'Catania', 'Bari', 'Venice', 'Verona', 'Messina', 'Padua', 'Trieste', 'Taranto', 'Brescia', 'Prato', 'Modena', 'Reggio Calabria'];


        for ($i=0; $i < 100; $i++) { 
            $train = new Train();
            $train->company = $faker->randomElement($trainCompanies);
            $train->departure_station = $faker->randomElement($cities);
            $train->arrival_station = $faker->randomElement(array_diff($cities, [$train->departure_station]));
            $train->departure_time = $faker->dateTimeBetween('-2 days', '+1 week');
            
            // arrival time to be from 2 to 48 hours later than departure time
            $hours = $faker->numberBetween(1, 48);
            $arrival_time = clone $train->departure_time;
            $arrival_time->modify("+{$hours} hours");
            $train->arrival_time = $arrival_time;

            $train->train_code = $faker->unique()->numerify('train-####') . '-' . $faker->bothify('??-##');
            $train->number_of_carriages = $faker->numberBetween(6, 50);
            $train->on_time = $faker->numberBetween(0, 1);
            $train->canceled = $faker->numberBetween(0, 1);
            $train->train_full_name = $train->train_code . '-' . $train->arrival_station;
            $train->save();
        }
        
    }
}
