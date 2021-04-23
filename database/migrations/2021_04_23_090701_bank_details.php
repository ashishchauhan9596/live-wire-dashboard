<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BankDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->string('name_on_account')->nullable();
            $table->string('bank_routing')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('tax_payer_id')->nullable();
            $table->string('tax_payer_name')->nullable();
            $table->enum('entity_status', ['Sole Proprietor/Individual', 'LLC', 'C-Corp', 'S-Corp', 'Partnership ', 'Other'])->default('Sole Proprietor/Individual');
            $table->string('address_street')->nullable();
            $table->string('address_apt_or_unit')->nullable();
            $table->string('address_city')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_zip')->nullable();
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
        Schema::dropIfExists('bank_details');
    }
}
