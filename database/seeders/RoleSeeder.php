<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            "poste" => "ATT"
        ]);
        DB::table("roles")->insert([
            "poste" => "CT"
        ]);
        DB::table("roles")->insert([
            "poste" => "DC"
        ]);
        DB::table("roles")->insert([
            "poste" => "RP"
        ]);
    }
}
