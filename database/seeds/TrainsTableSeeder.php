<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Italo';
        $train->stazione_di_partenza = 'Termoli';
        $train->stazione_di_arrivo = 'Bologna';
        $train->orario_di_partenza = '2021-12-14 06:00:00';
        $train->orario_di_arrivo = '2021-12-14 10:00:00';
        $train->codice_treno = 86039;
        $train->numero_carrozze = 9;
        $train->in_orario = true;
        $train->cancellato = false;
        $train->save();
    }
}
