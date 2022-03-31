<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

require_once 'vendor/autoload.php';

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //richiamo il file Model, per creare un nuovo elemento della tabella
        /* $travel = new Travel();

        $travel["nome"] = "vacanza tropicale deluxe";
        $travel["descrizione"] = "Vacanza rilassante dopo la fine del corso";
        $travel["prezzo"] = 1500;
        $travel["indirizzo"] = "Via che mi sto inventando adesso 15";
        $travel["numero_recensioni"] = 220;
        $travel["numero_giorni"] = 7;

        $travel->save(); */


        //BONUS dati generati casualmente tramite la classe Faker
        for($i = 0; $i < 10; $i++){
            //richiamo il file Model, per creare un nuovo elemento della tabella
            $travel = new Travel();

            $travel->nome = $faker->name();
            $travel->descrizione = $faker->text();
            $travel->prezzo = $faker->randomNumber(4, true);
            $travel->indirizzo = $faker->sentence();
            $travel->numero_recensioni = $faker->randomNumber(3, false);
            $travel->numero_giorni = $faker->randomNumber(2, true);

            $travel->save();
        }

    }
}
