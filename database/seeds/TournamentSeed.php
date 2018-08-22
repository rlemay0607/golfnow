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

        ];

        foreach ($items as $item) {
            \App\Tournament::create($item);
        }
    }
}

