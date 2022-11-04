<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)

    {
        for($i=0; $i <100; $i++ ){

            //
            $train = new Train();

            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTime('YYYY-MM-DD');
            $train->orario_di_arrivo = $faker->dateTime('YYYY-MM-DD');
            $train->codice_treno = $faker->ean8();
            $train->numero_carrozze = $faker->numberBetween(3,10);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();

            /* ////////////////////////////////////////////// */
            $train->save();


        }

      }
}
