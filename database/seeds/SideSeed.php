<?php

use Illuminate\Database\Seeder;

class SideSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Front 9',],
            ['id' => 2, 'name' => 'Back 9',],

        ];

        foreach ($items as $item) {
            \App\Side::create($item);
        }
    }
}
