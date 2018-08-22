<?php

use Illuminate\Database\Seeder;

class TeeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'tee_name' => 'Red',],
            ['id' => 2, 'tee_name' => 'White',],
            ['id' => 3, 'tee_name' => 'Blue',],
            ['id' => 4, 'tee_name' => 'Black',],
            ['id' => 5, 'tee_name' => 'Gold',],

        ];

        foreach ($items as $item) {
            \App\Tee::create($item);
        }
    }
}
