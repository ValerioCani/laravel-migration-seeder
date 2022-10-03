<?php

use App\Train;
use Illuminate\Database\Seeder;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for( $i=0; $i<120; $i++){
            $newride = new Train();
            $newride->azienda = $faker->word();
            $newride->stazione_di_partenza = $faker->city();
            $newride->stazione_di_arrivo = $faker->city();
            $newride->orario_di_partenza = $faker->time();
            $newride->orario_di_arrivo = $faker->time();
            $newride->codice_treno = $faker->numberBetween(100, 9999);
            $newride->numero_carrozze = $faker->numberBetween(3, 15);
            $newride->in_oraio = $faker->boolean();
            $newride->cancellato = $faker->boolean();
            $newride->save();
        }
    }
}

