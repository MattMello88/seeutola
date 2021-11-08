<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Matheus Mello',
            'email' => 'matheus@matheus.com',
            'password' => bcrypt('123456'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
