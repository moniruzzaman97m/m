<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
            ]);


            DB::table('users')->insert([
                'role_id' => 2,
                'name' => 'USER',
                'email' => 'user@user.com',
                'password' => bcrypt('password')
                ]);



    }
}
