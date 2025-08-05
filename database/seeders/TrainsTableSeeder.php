<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $oggi = new \DateTime(); // data e ora corrente
        $fine2025 = new \DateTime('2025-12-31 23:59:59');

        // Data di partenza: da ora fino alla fine del 2025
        $partenza = $faker->dateTimeBetween($oggi, $fine2025);

        // Data di arrivo: dopo la partenza, sempre entro fine 2025
        $arrivo = $faker->dateTimeBetween($partenza, $fine2025);


        for ($i = 0; $i < 5; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $partenza->format('Y-m-d H:i:s');
            $newTrain->orario_di_arrivo = $arrivo->format('Y-m-d H:i:s');
            $newTrain->codice_treno = $faker->randomNumber(4);
            $newTrain->in_orario =  $faker->boolean();
            $newTrain->ritardo = $faker->numberBetween(0, 12);
            $newTrain->cancellato = false;
            $newTrain->totale_carrozze = $faker->randomNumber(2);
            $newTrain->save();
        }
    }
}
