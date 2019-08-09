<?php

use Illuminate\Database\Seeder;

class HoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
           
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 3, 'hole_yardage' => 386, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 11, 'hole_yardage' => 348, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 9, 'hole_yardage' => 483, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 1, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 1, 'hole_yardage' => 366, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 15, 'hole_yardage' => 162, 'hole_par' => 3, 'close_pin' => 1, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 7, 'hole_yardage' => 320, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 13, 'hole_yardage' => 294, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 17, 'hole_yardage' => 148, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 5, 'hole_yardage' => 432, 'hole_par' => 5, 'close_pin' => 1, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 6, 'hole_yardage' => 295, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 10, 'hole_yardage' => 306, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 14, 'hole_yardage' => 475, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 1, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 12, 'hole_yardage' => 348, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 18, 'hole_yardage' => 161, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 2, 'hole_yardage' => 453, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 8, 'hole_yardage' => 375, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 1],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 16, 'hole_yardage' => 152, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 4, 'hole_yardage' => 320, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            
           
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 7, 'hole_yardage' => 386, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 11, 'hole_yardage' => 300, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 5, 'hole_yardage' => 407, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 1, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 1, 'hole_yardage' => 255, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 15, 'hole_yardage' => 148, 'hole_par' => 3, 'close_pin' => 1, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 9, 'hole_yardage' => 305, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 13, 'hole_yardage' => 294, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 17, 'hole_yardage' => 132, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 3, 'hole_yardage' => 358, 'hole_par' => 5, 'close_pin' => 1, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 4, 'hole_yardage' => 295, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 12, 'hole_yardage' => 306, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 10, 'hole_yardage' => 398, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 1, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 8, 'hole_yardage' => 304, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 16, 'hole_yardage' => 150, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 2, 'hole_yardage' => 393, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 14, 'hole_yardage' => 294, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 18, 'hole_yardage' => 152, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 6, 'hole_yardage' => 255, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 3, 'hole_yardage' => 385, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 1, 'hole_yardage' => 398, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 17, 'hole_yardage' => 331, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 11, 'hole_yardage' => 285, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 15, 'hole_yardage' => 141, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 5, 'hole_yardage' => 352, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 9, 'hole_yardage' => 295, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 13, 'hole_yardage' => 150, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 7, 'hole_yardage' => 512, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 6, 'hole_yardage' => 373, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 4, 'hole_yardage' => 359, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 12, 'hole_yardage' => 180, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 10, 'hole_yardage' => 341, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 2, 'hole_yardage' => 391, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 16, 'hole_yardage' => 165, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 14, 'hole_yardage' => 464, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 8, 'hole_yardage' => 346, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 18, 'hole_yardage' => 491, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 3, 'hole_yardage' => 372, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 1, 'hole_yardage' => 350, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 17, 'hole_yardage' => 292, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 11, 'hole_yardage' => 274, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 15, 'hole_yardage' => 117, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 5, 'hole_yardage' => 304, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 9, 'hole_yardage' => 269, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 13, 'hole_yardage' => 141, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 7, 'hole_yardage' => 494, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 6, 'hole_yardage' => 358, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 4, 'hole_yardage' => 313, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 12, 'hole_yardage' => 160, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 10, 'hole_yardage' => 289, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 2, 'hole_yardage' => 366, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 16, 'hole_yardage' => 118, 'hole_par' => 3, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 14, 'hole_yardage' => 440, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 8, 'hole_yardage' => 298, 'hole_par' => 4, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0],
            ['course_name_id' => 2, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 18, 'hole_yardage' => 468, 'hole_par' => 5, 'close_pin' => 0, 'long_drive' => 0, 'blue_tees' => 0]
            

        ];

        foreach ($items as $item) {
            \App\Hole::create($item);
        }
    }
}

