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

            ['id' => 4, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 6, 'hole_yardage' => 357, 'hole_par' => 4, ],
            ['id' => 5, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 6, 'hole_yardage' => 339, 'hole_par' => 4, ],
            ['id' => 6, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 6, 'hole_yardage' => 322, 'hole_par' => 4, ],
            ['id' => 7, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 1, 'hole_handicap' => 6, 'hole_yardage' => 281, 'hole_par' => 4, ],
            ['id' => 8, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 10, 'hole_yardage' => 190, 'hole_par' => 3, ],
            ['id' => 9, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 10, 'hole_yardage' => 164, 'hole_par' => 3, ],
            ['id' => 10, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 10, 'hole_yardage' => 148, 'hole_par' => 3, ],
            ['id' => 11, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 2, 'hole_handicap' => 10, 'hole_yardage' => 109, 'hole_par' => 3, ],
            ['id' => 12, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 16, 'hole_yardage' => 345, 'hole_par' => 4, ],
            ['id' => 13, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 16, 'hole_yardage' => 330, 'hole_par' => 4, ],
            ['id' => 14, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 16, 'hole_yardage' => 280, 'hole_par' => 4, ],
            ['id' => 15, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 3, 'hole_handicap' => 16, 'hole_yardage' => 220, 'hole_par' => 4, ],
            ['id' => 16, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 4, 'hole_yardage' => 394, 'hole_par' => 4, ],
            ['id' => 17, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 4, 'hole_yardage' => 367, 'hole_par' => 4, ],
            ['id' => 18, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 4, 'hole_yardage' => 360, 'hole_par' => 4, ],
            ['id' => 19, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 4, 'hole_handicap' => 4, 'hole_yardage' => 274, 'hole_par' => 4, ],
            ['id' => 20, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 7, 'hole_yardage' => 372, 'hole_par' => 4, ],
            ['id' => 21, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 7, 'hole_yardage' => 356, 'hole_par' => 4, ],
            ['id' => 22, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 7, 'hole_yardage' => 341, 'hole_par' => 4, ],
            ['id' => 23, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 5, 'hole_handicap' => 7, 'hole_yardage' => 277, 'hole_par' => 4, ],
            ['id' => 24, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 14, 'hole_yardage' => 612, 'hole_par' => 5, ],
            ['id' => 25, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 14, 'hole_yardage' => 570, 'hole_par' => 5, ],
            ['id' => 26, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 14, 'hole_yardage' => 517, 'hole_par' => 5, ],
            ['id' => 27, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 6, 'hole_handicap' => 14, 'hole_yardage' => 414, 'hole_par' => 5, ],
            ['id' => 28, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 8, 'hole_yardage' => 249, 'hole_par' => 3, ],
            ['id' => 29, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 8, 'hole_yardage' => 180, 'hole_par' => 3, ],
            ['id' => 30, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 8, 'hole_yardage' => 170, 'hole_par' => 3, ],
            ['id' => 31, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 7, 'hole_handicap' => 8, 'hole_yardage' => 150, 'hole_par' => 3, ],
            ['id' => 32, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 3, 'hole_yardage' => 420, 'hole_par' => 4, ],
            ['id' => 33, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 3, 'hole_yardage' => 360, 'hole_par' => 4, ],
            ['id' => 34, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 3, 'hole_yardage' => 343, 'hole_par' => 4, ],
            ['id' => 35, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 8, 'hole_handicap' => 3, 'hole_yardage' => 300, 'hole_par' => 4, ],
            ['id' => 36, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 17, 'hole_yardage' => 535, 'hole_par' => 5, ],
            ['id' => 37, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 17, 'hole_yardage' => 462, 'hole_par' => 5, ],
            ['id' => 38, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 17, 'hole_yardage' => 413, 'hole_par' => 5, ],
            ['id' => 39, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 1, 'hole_number' => 9, 'hole_handicap' => 17, 'hole_yardage' => 380, 'hole_par' => 5, ],
            ['id' => 40, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 12, 'hole_yardage' => 143, 'hole_par' => 3, ],
            ['id' => 41, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 12, 'hole_yardage' => 100, 'hole_par' => 3, ],
            ['id' => 42, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 12, 'hole_yardage' => 85, 'hole_par' => 3, ],
            ['id' => 43, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 10, 'hole_handicap' => 12, 'hole_yardage' => 75, 'hole_par' => 3, ],
            ['id' => 44, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 2, 'hole_yardage' => 396, 'hole_par' => 4, ],
            ['id' => 45, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 2, 'hole_yardage' => 362, 'hole_par' => 4, ],
            ['id' => 46, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 2, 'hole_yardage' => 314, 'hole_par' => 4, ],
            ['id' => 47, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 11, 'hole_handicap' => 2, 'hole_yardage' => 256, 'hole_par' => 4, ],
            ['id' => 48, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 18, 'hole_yardage' => 395, 'hole_par' => 4, ],
            ['id' => 49, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 18, 'hole_yardage' => 333, 'hole_par' => 4, ],
            ['id' => 50, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 18, 'hole_yardage' => 288, 'hole_par' => 4, ],
            ['id' => 51, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 12, 'hole_handicap' => 18, 'hole_yardage' => 258, 'hole_par' => 4, ],
            ['id' => 52, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 11, 'hole_yardage' => 170, 'hole_par' => 3, ],
            ['id' => 53, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 11, 'hole_yardage' => 128, 'hole_par' => 3, ],
            ['id' => 54, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 11, 'hole_yardage' => 103, 'hole_par' => 3, ],
            ['id' => 55, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 13, 'hole_handicap' => 11, 'hole_yardage' => 89, 'hole_par' => 3, ],
            ['id' => 56, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 13, 'hole_yardage' => 463, 'hole_par' => 5, ],
            ['id' => 57, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 13, 'hole_yardage' => 450, 'hole_par' => 5, ],
            ['id' => 58, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 13, 'hole_yardage' => 396, 'hole_par' => 5, ],
            ['id' => 59, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 14, 'hole_handicap' => 13, 'hole_yardage' => 360, 'hole_par' => 5, ],
            ['id' => 60, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 5, 'hole_yardage' => 381, 'hole_par' => 4, ],
            ['id' => 61, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 5, 'hole_yardage' => 367, 'hole_par' => 4, ],
            ['id' => 62, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 5, 'hole_yardage' => 356, 'hole_par' => 4, ],
            ['id' => 63, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 15, 'hole_handicap' => 5, 'hole_yardage' => 265, 'hole_par' => 4, ],
            ['id' => 64, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 1, 'hole_yardage' => 363, 'hole_par' => 4, ],
            ['id' => 65, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 1, 'hole_yardage' => 340, 'hole_par' => 4, ],
            ['id' => 66, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 1, 'hole_yardage' => 302, 'hole_par' => 4, ],
            ['id' => 67, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 16, 'hole_handicap' => 1, 'hole_yardage' => 205, 'hole_par' => 4, ],
            ['id' => 68, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 9, 'hole_yardage' => 442, 'hole_par' => 4, ],
            ['id' => 69, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 9, 'hole_yardage' => 402, 'hole_par' => 4, ],
            ['id' => 70, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 9, 'hole_yardage' => 352, 'hole_par' => 4, ],
            ['id' => 71, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 17, 'hole_handicap' => 9, 'hole_yardage' => 325, 'hole_par' => 4, ],
            ['id' => 72, 'course_name_id' => 1, 'tees_id' => 3, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 15, 'hole_yardage' => 546, 'hole_par' => 5, ],
            ['id' => 73, 'course_name_id' => 1, 'tees_id' => 2, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 15, 'hole_yardage' => 518, 'hole_par' => 5,],
            ['id' => 74, 'course_name_id' => 1, 'tees_id' => 5, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 15, 'hole_yardage' => 478, 'hole_par' => 5, ],
            ['id' => 75, 'course_name_id' => 1, 'tees_id' => 1, 'side_id' => 2, 'hole_number' => 18, 'hole_handicap' => 15, 'hole_yardage' => 461, 'hole_par' => 5, ],

        ];

        foreach ($items as $item) {
            \App\Hole::create($item);
        }
    }
}

