<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
            'username'      => 'Sales',
            'password'  => bcrypt('welkom1'),
            'admin'     => '0',
        ]);
        DB::table('tbl_users')->insert([
            'username'      => 'Development',
            'password'  => bcrypt('welkom1'),
            'admin'     => '0',
        ]);
        DB::table('tbl_users')->insert([
            'username'      => 'Finance',
            'password'  => bcrypt('welkom1'),
            'admin'     => '0',
        ]);
        DB::table('tbl_users')->insert([
            'username'      => 'Admin',
            'password'  => bcrypt('welkom1'),
            'admin'     => '1',
        ]);
    }
}
