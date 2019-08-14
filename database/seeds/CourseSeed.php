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
            ['id' => 2, 'course_name' => 'Stadium', 'street' => '333 Jackson Avenue', 'city' => 'Schenectady', 'state' => 'NY', 'zip_code' => '12304', 'phone_number' => '(518) 374-9104', 'website' => 'https://www.stadiumgolfclub.com/',],
            ['id' => 3, 'course_name' => 'Frear Park', 'street' => '2701 Lavin Ct', 'city' => 'Troy', 'state' => 'NY', 'zip_code' => '12180', 'phone_number' => '(518) 270-4553', 'website' => 'http://www.troyny.gov/departments/parks-recreation/parks-facilities/golf-course/',],

        ];

        foreach ($items as $item) {
            \App\Course::create($item);
        }
    }
}
