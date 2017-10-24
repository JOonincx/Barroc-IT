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
                    'Address1'  => $faker->create()->streetAddress,
                    'PostCode1'     => $faker->create()->postcode,
                    'Residence1'     => $faker->create()->city,
                    'Address2'     => $faker->create()->streetAddress,
                    'Postcode2'     => $faker->create()->postcode,
                    'Residence2'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number1'     => $faker->create()->phoneNumber,
                    'telephone_number2'     => $faker->create()->phoneNumber,
                    'Fax_number'     => $faker->create()->phoneNumber,
                    'e-mail'     => $faker->create()->safeEmail,
                    'limiet'     => 1000,
                    'prospect'     => 0,
                    'BKR'       => true,
                ]);
            }else if($i <= 185){
                DB::table('tbl_clients')->insert([
                    'company_name'  => "Dezelfdenaam",
                    'Address1'  => $faker->create()->streetAddress,
                    'PostCode1'     => $faker->create()->postcode,
                    'Residence1'     => $faker->create()->city,
                    'Address2'     => $faker->create()->streetAddress,
                    'Postcode2'     => $faker->create()->postcode,
                    'Residence2'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number1'     => $faker->create()->phoneNumber,
                    'telephone_number2'     => $faker->create()->phoneNumber,
                    'Fax_number'     => $faker->create()->phoneNumber,
                    'e-mail'     => $faker->create()->safeEmail,
                    'limiet'     => 1000,
                    'prospect'     => 0,
                    'BKR'       => true,
                ]);
            }else if($i <= 225){
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'Address1'  => $faker->create()->streetAddress,
                    'PostCode1'     => $faker->create()->postcode,
                    'Residence1'     => "Breda",
                    'Address2'     => $faker->create()->streetAddress,
                    'Postcode2'     => $faker->create()->postcode,
                    'Residence2'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number1'     => $faker->create()->phoneNumber,
                    'telephone_number2'     => $faker->create()->phoneNumber,
                    'Fax_number'     => $faker->create()->phoneNumber,
                    'e-mail'     => $faker->create()->safeEmail,
                    'limiet'     => 1000,
                    'prospect'     => 0,
                    'BKR'       => true,
                ]);
            }else if($i <= 245){
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'Address1'  => $faker->create()->streetAddress,
                    'PostCode1'     => $faker->create()->postcode,
                    'Residence1'     => "Oosterhout",
                    'Address2'     => $faker->create()->streetAddress,
                    'Postcode2'     => $faker->create()->postcode,
                    'Residence2'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number1'     => $faker->create()->phoneNumber,
                    'telephone_number2'     => $faker->create()->phoneNumber,
                    'Fax_number'     => $faker->create()->phoneNumber,
                    'e-mail'     => $faker->create()->safeEmail,
                    'limiet'     => 1000,
                    'prospect'     => 0,
                    'BKR'         => false,
                ]);
            }else {
                DB::table('tbl_clients')->insert([
                    'company_name'  => $faker->create()->name(),
                    'Address1'  => "DezelfdeStraat 5",
                    'PostCode1'     => $faker->create()->postcode,
                    'Residence1'     => $faker->create()->city,
                    'Address2'     => $faker->create()->streetAddress,
                    'Postcode2'     => $faker->create()->postcode,
                    'Residence2'     => $faker->create()->city,
                    'contact_person'  => $faker->create()->name,
                    'initials'     => $faker->create()->name,
                    'telephone_number1'     => $faker->create()->phoneNumber,
                    'telephone_number2'     => $faker->create()->phoneNumber,
                    'Fax_number'     => $faker->create()->phoneNumber,
                    'e-mail'     => $faker->create()->safeEmail,
                    'limiet'     => 1000,
                    'prospect'     => 0,
                    'BKR'       => false,
                ]);
            }
        }
    }
}
