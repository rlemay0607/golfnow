<?php

use Illuminate\Database\Seeder;

class TournamentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1,'name' => 'Deacon Blues', ],
            ['id' => 100000000, 'name' => 'None Tourament Play',],

        ];

        foreach ($items as $item) {
            \App\Tournament::create($item);
        }
    }
}

