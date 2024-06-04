<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team_member = [

            [
                "id" => 101,
                "image" => 'assets/img/team/team-3.jpg',
                "name" => "name 1",
                "designation" => "designation 1"
            ],
            [
                "id" => 102,
                "image" => 'assets/img/team/team-1.jpg',
                "name" => "name ",
                "designation" => "designation "
            ],
            [
                "id" => 103,
                "image" => 'assets/img/team/team-2.jpg',
                "name" => "name",
                "designation" => "designation "
            ],
            [
                "id" => 104,
                "image" => 'assets/img/team/team-3.jpg',
                "name" => "name ",
                "designation" => "designation "
            ],
            [
                "id" => 105,
                "image" => 'assets/img/team/team-4.jpg',
                "name" => "name ",
                "designation" => "designation "
            ],
            [
                "id" => 106,
                "image" => 'assets/img/team/team-2.jpg',
                "name" => "name 1",
                "designation" => "designation "
            ],
            [
                "id" => 107,
                "image" => 'assets/img/team/team-1.jpg',
                "name" => "name ",
                "designation" => "designation "
            ],
            [
                "id" => 108,
                "image" => 'assets/img/team/team-2.jpg',
                "name" => "name 1",
                "designation" => "designation 1"
            ],
            [
                "id" => 109,
                "image" => 'assets/img/team/team-3.jpg',
                "name" => "name ",
                "designation" => "designation "
            ],
            [
                "id" => 110,
                "image" => 'assets/img/team/team-4.jpg',
                "name" => "name ",
                "designation" => "designation"
            ],
            [

                "id" => 111,
                "image" => 'assets/img/team/team-1.jpg',
                "name" => "name ",
                "designation" => "designation"
            ],

        ];

        foreach ($team_member as $teamData) {
            TeamMember::create($teamData);
        }

    }
}
