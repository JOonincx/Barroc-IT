<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 1; $i < 51; $i++){
            DB::table('tbl_projects')->insert([
                'client_id'                 =>   $i,
                'project_name'              =>  $faker->create()->name(),
                'maintance'                 =>  true,
                'operating_system'          =>  "windows",
                'applications'              =>  "Testdata",
            ]);
            DB::table('tbl_projects')->insert([
                'client_id'                 =>   $i,
                'project_name'              =>  $faker->create()->name(),
                'maintance'                 =>  true,
                'operating_system'          =>  "windows",
                'applications'              =>  "Testdata",
            ]);
        }
        for ($i = 51; $i < 81; $i++){
            DB::table('tbl_projects')->insert([
                'client_id'                 =>   $i,
                'project_name'              =>  $faker->create()->name(),
                'maintance'                 =>  true,
                'operating_system'          =>  "windows",
                'applications'              =>  "Testdata",
            ]);
        }
    }
}
