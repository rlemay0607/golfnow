<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'permission_access',],
            ['id' => 3, 'title' => 'permission_create',],
            ['id' => 4, 'title' => 'permission_edit',],
            ['id' => 5, 'title' => 'permission_view',],
            ['id' => 6, 'title' => 'permission_delete',],
            ['id' => 7, 'title' => 'role_access',],
            ['id' => 8, 'title' => 'role_create',],
            ['id' => 9, 'title' => 'role_edit',],
            ['id' => 10, 'title' => 'role_view',],
            ['id' => 11, 'title' => 'role_delete',],
            ['id' => 12, 'title' => 'user_access',],
            ['id' => 13, 'title' => 'user_create',],
            ['id' => 14, 'title' => 'user_edit',],
            ['id' => 15, 'title' => 'user_view',],
            ['id' => 16, 'title' => 'user_delete',],
            ['id' => 17, 'title' => 'course_management_access',],
            ['id' => 18, 'title' => 'course_access',],
            ['id' => 19, 'title' => 'course_create',],
            ['id' => 20, 'title' => 'course_edit',],
            ['id' => 21, 'title' => 'course_view',],
            ['id' => 22, 'title' => 'course_delete',],
            ['id' => 23, 'title' => 'handicap_lookup_access',],
            ['id' => 24, 'title' => 'handicap_lookup_create',],
            ['id' => 25, 'title' => 'handicap_lookup_edit',],
            ['id' => 26, 'title' => 'handicap_lookup_view',],
            ['id' => 27, 'title' => 'handicap_lookup_delete',],
            ['id' => 28, 'title' => 'hole_access',],
            ['id' => 29, 'title' => 'hole_create',],
            ['id' => 30, 'title' => 'hole_edit',],
            ['id' => 31, 'title' => 'hole_view',],
            ['id' => 32, 'title' => 'hole_delete',],
            ['id' => 33, 'title' => 'tee_access',],
            ['id' => 34, 'title' => 'tee_create',],
            ['id' => 35, 'title' => 'tee_edit',],
            ['id' => 36, 'title' => 'tee_view',],
            ['id' => 37, 'title' => 'tee_delete',],
            ['id' => 38, 'title' => 'side_access',],
            ['id' => 39, 'title' => 'side_create',],
            ['id' => 40, 'title' => 'side_edit',],
            ['id' => 41, 'title' => 'side_view',],
            ['id' => 42, 'title' => 'side_delete',],
            ['id' => 43, 'title' => 'tournament_access',],
            ['id' => 49, 'title' => 'tournament_management_access',],
            ['id' => 50, 'title' => 'tournament_create',],
            ['id' => 51, 'title' => 'tournament_edit',],
            ['id' => 52, 'title' => 'tournament_view',],
            ['id' => 53, 'title' => 'tournament_delete',],
            ['id' => 55, 'title' => 'rounds_management_access',],
            ['id' => 56, 'title' => 'round_access',],
            ['id' => 57, 'title' => 'round_create',],
            ['id' => 58, 'title' => 'round_edit',],
            ['id' => 59, 'title' => 'round_view',],
            ['id' => 60, 'title' => 'round_delete',],
            ['id' => 61, 'title' => 'round_hole_access',],
            ['id' => 62, 'title' => 'round_hole_create',],
            ['id' => 63, 'title' => 'round_hole_edit',],
            ['id' => 64, 'title' => 'round_hole_view',],
            ['id' => 65, 'title' => 'round_hole_delete',],
            ['id' => 66, 'title' => 'league_management_access',],
            ['id' => 67, 'title' => 'league_type_access',],
            ['id' => 68, 'title' => 'league_type_create',],
            ['id' => 69, 'title' => 'league_type_edit',],
            ['id' => 70, 'title' => 'league_type_view',],
            ['id' => 71, 'title' => 'league_type_delete',],
            ['id' => 72, 'title' => 'league_access',],
            ['id' => 73, 'title' => 'league_create',],
            ['id' => 74, 'title' => 'league_edit',],
            ['id' => 75, 'title' => 'league_view',],
            ['id' => 76, 'title' => 'league_delete',],
            ['id' => 77, 'title' => 'round_hole_note_access',],
            ['id' => 78, 'title' => 'round_hole_note_create',],
            ['id' => 79, 'title' => 'round_hole_note_edit',],
            ['id' => 80, 'title' => 'round_hole_note_view',],
            ['id' => 81, 'title' => 'round_hole_note_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
