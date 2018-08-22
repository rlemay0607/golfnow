<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 1, 'name' => 'Tim Allard', 'email' => 'Tim.Allard@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 20,],
            ['id' => 2, 'name' => 'Ryan LeMay', 'email' => 'lemay.ryan@gmail.com', 'password' => '$2y$10$GMpXzuSYdNqBD42dQbtwvOjLJCtYeCOuxCDYAShKgAmH3qDhGMshu', 'remember_token' => null, 'approved' => 1, 'admin' => 1,'handicap' => 23,],
            ['id' => 3, 'name' => 'Rick Bertand', 'email' => 'Rick.Bertand@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 14,],
            ['id' => 4, 'name' => 'Dennis Bordeau', 'email' => 'Dennis.Bordeau@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 23,],
            ['id' => 5, 'name' => 'Jim Breig', 'email' => 'Jim.Breig@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 17,],
            ['id' => 6, 'name' => 'Mike Cole', 'email' => 'Mike.Cole@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 16,],
            ['id' => 7, 'name' => 'Ryan Cole', 'email' => 'Ryan.Cole@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 22,],
            ['id' => 8, 'name' => 'Tom Condon', 'email' => 'Tom.Condon@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 13,],
            ['id' => 9, 'name' => 'Ed Daigneault', 'email' => 'Ed.Daigneault@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 22,],
            ['id' => 10, 'name' => 'Jack Daigneault', 'email' => 'Jack.Daigneault@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 13,],
            ['id' => 11, 'name' => 'Bill Dowen', 'email' => 'Bill.Dowen@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 21,],
            ['id' => 12, 'name' => 'Jim Durkin', 'email' => 'Jim.Durkin@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 17,],
            ['id' => 13, 'name' => 'John Galuski', 'email' => 'John.Galuski@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 19,],
            ['id' => 14, 'name' => 'Kevin Galuski', 'email' => 'Kevin.Galuski@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 18,],
            ['id' => 15, 'name' => 'Joe Gerwin', 'email' => 'Joe.Gerwin@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 13,],
            ['id' => 16, 'name' => 'Mike Hack', 'email' => 'Mike.Hack@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 30,],
            ['id' => 17, 'name' => 'Eric Kehn', 'email' => 'Eric.Kehn@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 16,],
            ['id' => 18, 'name' => 'Ed Lysogorsky', 'email' => 'Ed.Lysogorsky@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 18,],
            ['id' => 19, 'name' => 'George Marcil', 'email' => 'George.Marcil@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 22,],
            ['id' => 20, 'name' => 'Craig Martin', 'email' => 'Craig.Martin@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 15,],
            ['id' => 21, 'name' => 'Bill Naylor', 'email' => 'Bill.Naylor@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 25,],
            ['id' => 22, 'name' => 'Leon Rosko', 'email' => 'Leon.Rosko@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 18,],
            ['id' => 23, 'name' => 'Bob Shoemaker', 'email' => 'Bob.Shoemaker@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 13,],
            ['id' => 24, 'name' => 'Jeff Stevens', 'email' => 'Jeff.Stevens@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 11,],
            ['id' => 25, 'name' => 'Bert VanDenburgh', 'email' => 'Bert.VanDenburgh@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 5,],
            ['id' => 26, 'name' => 'Jason VanDenburg', 'email' => 'Jason.VanDenburg@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 11,],
            ['id' => 27, 'name' => 'Dave Welch', 'email' => 'Dave.Welch@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 31,],
            ['id' => 28, 'name' => 'Ed Whelan', 'email' => 'Ed.Whelan@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 17,],
            ['id' => 29, 'name' => 'Joe Zawistowski', 'email' => 'Joe.Zawistowski@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 24,],
            ['id' => 30, 'name' => 'Bob LeMay', 'email' => 'Bob.LeMay@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 14,],
            ['id' => 31, 'name' => 'Eric VanDenburg', 'email' => 'Eric.VanDenburg@golf.com', 'password' => '$2y$10$xXwumNyix6zhTvdjviRk0eMBwv2bTSc7FvfRpb51jLSnHDf1t8nx6', 'remember_token' => '', 'approved' => 1, 'admin' => 0, 'handicap' => 11,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
