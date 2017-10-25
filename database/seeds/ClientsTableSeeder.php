<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i <= 250; $i++){
            if($i <= 175){
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'adress'  => $faker->create()->streetAddress,
                    'postcode'     => $faker->create()->postcode,
                    'residence'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number'     => $faker->create()->phoneNumber,
                    'faxnumber'     => $faker->create()->phoneNumber,
                    'email'     => $faker->create()->safeEmail,
                    'limit'     => 1000,
                    'prospect'     => 0,
                    'creditworthy'  => 1,
                    'BKR'       => true,
                ]);
            }else if($i <= 185){
                DB::table('tbl_clients')->insert([
                    'company_name'  => "Dezelfdenaam",
                    'adress'  => $faker->create()->streetAddress,
                    'postcode'     => $faker->create()->postcode,
                    'residence'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number'     => $faker->create()->phoneNumber,
                    'faxnumber'     => $faker->create()->phoneNumber,
                    'email'     => $faker->create()->safeEmail,
                    'limit'     => 1000,
                    'prospect'     => 0,
                    'creditworthy'  => 1,
                    'BKR'       => true,
                ]);
            }else if($i <= 225){
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'adress'  => $faker->create()->streetAddress,
                    'postcode'     => $faker->create()->postcode,
                    'residence'     => "Breda",
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number'     => $faker->create()->phoneNumber,
                    'faxnumber'     => $faker->create()->phoneNumber,
                    'email'     => $faker->create()->safeEmail,
                    'limit'     => 1000,
                    'prospect'     => 0,
                    'creditworthy'  => 1,
                    'BKR'       => true,
                ]);
            }else if($i <= 245){
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'adress'  => $faker->create()->streetAddress,
                    'postcode'     => $faker->create()->postcode,
                    'residence'     => "Oosterhout",
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number'     => $faker->create()->phoneNumber,
                    'faxnumber'     => $faker->create()->phoneNumber,
                    'email'     => $faker->create()->safeEmail,
                    'limit'     => 1000,
                    'prospect'     => 0,
                    'creditworthy'  => 1,
                    'BKR'         => false,
                ]);
            }else {
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'adress'  => "DezelfdeStraat 5",
                    'postcode'     => $faker->create()->postcode,
                    'residence'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number'     => $faker->create()->phoneNumber,
                    'faxnumber'     => $faker->create()->phoneNumber,
                    'email'     => $faker->create()->safeEmail,
                    'limit'     => 1000,
                    'prospect'     => 0,
                    'creditworthy'  => 1,
                    'BKR'       => false,
                ]);
            }
        }
    }
}
