<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContinentSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(RoleSeeder::class);
        DB::table("equipes")->insert([
            "nom" => "Sans Equipe",
            "ville" => "null",
            "pays" => "null",
            "max" => 1000,
            "att" => 200,
            "ct" => 200,
            "dc" => 300,
            "rp" => 300,
            "continent_id" => 1
        ]);
        Team::factory(5)->create();
        Player::factory(15)->create();
    }
}