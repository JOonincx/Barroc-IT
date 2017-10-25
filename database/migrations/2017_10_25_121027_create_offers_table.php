<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_offers', function (Blueprint $table) {
            $table->increments('offer_id');
            $table->integer('client_id');
            $table->integer('project_id');
            $table->boolean('offer_status');
            $table->integer('sales_percentage');
            $table->string('crediteurgegevens');
            $table->string('debiteurgegevens');
            $table->integer('saldo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_offers');
    }
}
