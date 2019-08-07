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
            
            ['id' => 1, 'course_name' => 'Kanon Valley Country Club', 'street' => '8623 Lake Road', 'city' => 'Oneida', 'state' => 'NY', 'zip_code' => '13421', 'phone_number' => '(315) 363-8283', 'website' => 'http://www.kanonvalley.com/',],
            //['id' => 2, 'course_name' => 'Stadium', 'street' => '333 Jackson Avenue', 'city' => 'Schenectady', 'state' => 'NY', 'zip_code' => '12304', 'phone_number' => '(518) 374-9104', 'website' => 'https://www.stadiumgolfclub.com/',],

        ];

        foreach ($items as $item) {
            \App\Course::create($item);
        }
    }
}
