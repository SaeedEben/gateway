<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatewaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gateways', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('merchant_id')->nullable();
            $table->enum('type', \Larabookir\Gateway\Models\Gateway::TYPES)->nullable();
            $table->enum('server', \Larabookir\Gateway\Models\Gateway::SERVERS)->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('description')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->integer('terminal_id')->nullable();
            $table->string('callback_url')->nullable();
            $table->string('api')->nullable();
            $table->string('sha1key')->nullable();
            $table->string('transactionKey')->nullable();
            $table->string('pin')->nullable();
            $table->string('certificate_path')->nullable();
            $table->integer('merchant_config_id')->nullable();
            $table->string('key')->nullable();
            $table->string('iv')->nullable();

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
        Schema::dropIfExists('gateways');
    }
}
