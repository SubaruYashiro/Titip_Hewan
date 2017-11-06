<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
        	['name' => 'Michael Randicha', 'email' => 'mrandicha@student.ciputra.ac.id', 'password' => bcrypt('michael'), 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
        DB::table('admins')->insert(
        	['name' => 'Valencia Rudianto', 'email' => 'vrudianto@student.ciputra.ac.id', 'password' => bcrypt('valencia'), 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
        DB::table('admins')->insert(
        	['name' => 'Yandhy Raka', 'email' => 'yraka@student.ciputra.ac.id', 'password' => bcrypt('raka'), 'created_at' => new DateTime, 'updated_at' => new DateTime]
        );
    }
}
