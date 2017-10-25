<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        $projectcount = 0;
        for ($i = 1; $i < 46; $i++){
            if ($i < 6){
                $projectcount++;
                for ($a = 0; $a < 5; $a++){

                    DB::table('tbl_offers')->insert([
                        'client_id'                 => $i,
                        'project_id'                => $projectcount,
                        'offer_status'              => 1,
                        'sales_percentage'          => 10,
                        'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                        'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                        'saldo'                     => 0,
                    ]);
                }
                $projectcount++;
            }else if ($i > 5 && $i < 11){
                $projectcount++;
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
            }else if($i > 10 && $i < 16){
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
            }else if($i > 15 && $i < 21){
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 50,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 50,
                    ]);
                }
            }else if($i > 20 && $i < 26){
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
            }else if($i > 25 && $i < 31){
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
            }else if($i > 30 && $i < 36){
                $projectcount++;
                for ($a = 0; $a < 5; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
            }else if($i > 35 && $i < 41){
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 100,
                    ]);
                }
            }else if($i > 40 && $i < 46){
                $projectcount++;
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 100,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
            }else if ($i > 45 && $i < 51){
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
                $projectcount++;
                for ($a = 0; $a < 2; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 1,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 0,
                    ]);
                }
                for ($a = 0; $a < 3; $a++) {
                    DB::table('tbl_offers')->insert([
                        'client_id' => $i,
                        'project_id' => $projectcount,
                        'offer_status' => 0,
                        'sales_percentage' => 10,
                        'crediteurgegevens' => $faker->create()->bankAccountNumber,
                        'debiteurgegevens' => $faker->create()->bankAccountNumber,
                        'saldo' => 500,
                    ]);
                }
            }
        }







        $count = 50;
        for ($i = 50; $i < 76; $i++){
            if($i < 56){
                for ($a = 0; $a < 5; $a++){
                    for ($b = 0; $b < 24; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 1,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 0,
                        ]);
                    }
                }
            }else if($i > 55 && $i < 61){
                for ($a = 0; $a < 5; $a++){
                    for ($b = 0; $b < 5; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 0,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 500,
                        ]);
                    }
                }
            }else if($i > 60 && $i < 66){
                for ($a = 0; $a < 5; $a++){
                    for ($b = 0; $b < 2; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 1,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 0,
                        ]);
                    }
                    for ($b = 0; $b < 3; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 0,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 500,
                        ]);
                    }
                }
            }else if($i > 65 && $i < 71){
                for ($a = 0; $a < 5; $a++){
                    for ($b = 0; $b < 3; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 1,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 0,
                        ]);
                    }
                    for ($b = 0; $b < 2; $b++){
                        DB::table('tbl_offers')->insert([
                            'client_id'                 => $i,
                            'project_id'                => $count,
                            'offer_status'              => 0,
                            'sales_percentage'          => 10,
                            'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                            'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                            'saldo'                     => 500,
                        ]);
                    }
                }
            }else if($i > 70 && $i < 76){
                for ($a = 0; $a < 5; $a++) {
                    for ($b = 0; $b < 4; $b++) {
                        DB::table('tbl_offers')->insert([
                            'client_id' => $i,
                            'project_id' => $count,
                            'offer_status' => 1,
                            'sales_percentage' => 10,
                            'crediteurgegevens' => $faker->create()->bankAccountNumber,
                            'debiteurgegevens' => $faker->create()->bankAccountNumber,
                            'saldo' => 0,
                        ]);
                    }
                    DB::table('tbl_offers')->insert([
                        'client_id'                 => $i,
                        'project_id'                => $count,
                        'offer_status'              => 0,
                        'sales_percentage'          => 10,
                        'crediteurgegevens'         => $faker->create()->bankAccountNumber,
                        'debiteurgegevens'          => $faker->create()->bankAccountNumber,
                        'saldo'                     => 500,
                    ]);
                }
            }
            $count++;
        }
    }
}