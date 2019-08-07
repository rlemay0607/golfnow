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

        ];

        foreach ($items as $item) {
            \App\Tee::create($item);
        }
    }
}
