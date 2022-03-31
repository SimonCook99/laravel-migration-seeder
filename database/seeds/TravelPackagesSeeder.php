<?php

use Illuminate\Database\Seeder;

use App\Travel;

class TravelPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //richiamo il file Model, per creare un nuovo elemento della tabella
        $travel = new Travel();

        $travel["nome"] = "vacanza tropicale deluxe";
        $travel["descrizione"] = "Vacanza rilassante dopo la fine del corso";
        $travel["prezzo"] = 1500;
        $travel["indirizzo"] = "Via che mi sto inventando adesso 15";
        $travel["numero_recensioni"] = 220;
        $travel["numero_giorni"] = 7;

        $travel->save();

    }
}
