<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travels = config('travels');

        foreach ($travels as $travel) {
            $newTravel = new Travel();
            $newTravel->departure = $travel['departure'];
            $newTravel->arrival = $travel['arrival'];
            $newTravel->departure_date = $travel['departure_date'];
            $newTravel->return_date = $travel['return_date'];
            $newTravel->accommodation_type = $travel['accommodation_type'];
            $newTravel->rooms = $travel['rooms'];
            $newTravel->adults_guests = $travel['adults_guests'];
            $newTravel->kids_guests = $travel['kids_guests'];
            $newTravel->neonates_guests = $travel['neonates_guests'];
            $newTravel->save();
        }
    }
}
