<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_sources', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_type_id')->unsigned();
            $table->integer('profit_loss_component_id')->unsigned();
            $table->string('transaction_source_name');
            $table->timestamps();
        });

        Schema::table('transaction_sources', function (Blueprint $table) {
            $table->foreign('transaction_type_id')
                ->references('id')
                ->on('transaction_types');
        });

        Schema::table('transaction_sources', function (Blueprint $table) {
            $table->foreign('profit_loss_component_id')
                ->references('id')
                ->on('profit_loss_components');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_sources');
    }
};
