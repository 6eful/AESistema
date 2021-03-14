<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
          $table->increments('ClientID');
          $table->char('ClientCompanyName', 100);
          $table->char('ClientTradingName', 100);
          $table->char('ClientCNPJ', 14);
          $table->string('ClientAddress');
          $table->char('ClientEmail', 80);
          $table->char('ClientPhone', 10);
          $table->char('ClientOwnerName', 80);
          $table->char('ClientCPF', 11);
          $table->char('ClientPhoneNumber', 11);

          $table->engine = "InnoDB";
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
        Schema::dropIfExists('clients');
    }
}
