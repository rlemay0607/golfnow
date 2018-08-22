<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(CourseSeed::class);
        $this->call(HandicapLookupSeed::class);
        $this->call(SideSeed::class);
        $this->call(TeeSeed::class);
        $this->call(HoleSeed::class);
        $this->call(PermissionSeed::class);
        $this->call(TournamentSeed::class);

        $this->call(UserSeed::class);



    }
}
