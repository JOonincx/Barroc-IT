<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clients', function (Blueprint $table) {
            $table->increments('client_id');
            $table->string('company_name');
            $table->string('adress');
            $table->string('postcode');
            $table->string('residence');
            $table->string('contact_person');
            $table->string('initials');
            $table->string('telephone_number1');
            $table->string('faxnumber');
            $table->string('email');
            $table->integer('limit');
            $table->boolean('prospect');
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
        Schema::dropIfExists('tbl_clients');
    }
}
