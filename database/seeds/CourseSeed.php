<?php

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'course_name' => 'Conklin Players Club', 'street' => '1520 Conklin Road', 'city' => 'Conklin', 'state' => 'NY', 'zip_code' => '13748', 'phone_number' => '(607) 775-3042', 'website' => 'http://conklinplayers.com/',],

        ];

        foreach ($items as $item) {
            \App\Course::create($item);
        }
    }
}
