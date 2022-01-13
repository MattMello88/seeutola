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
            'name' => 'Allan Jones',
            'email' => 'allan@seeutolapodcast.com.br',
            'password' => bcrypt('#@!podlah'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
