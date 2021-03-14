<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('ContractID');
            $table->unsignedInteger('ClientIDContract');
            $table->decimal('ContractAmount', 5,2);
            $table->decimal('ContractInitialValue', 5,2);
            $table->integer('ContractQtPayment');
            $table->string('ContractFile');
            $table->enum('ContractStatus', ['aberto','fechado']);

            $table->foreign('ClientIDContract')->references('ClientID')->on('clients')->onDelete('cascade');
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
        Schema::dropIfExists('contracts');
    }
}
