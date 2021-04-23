<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Schema;

class UserTableUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('middle_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('middle_name');
            $table->string('cell')->nullable()->after('password');
            $table->string('mailing_address_street')->nullable()->after('cell');
            $table->string('mailing_address_apt_or_unit')->nullable()->after('mailing_address_street');
            $table->string('mailing_address_city')->nullable()->after('mailing_address_apt_or_unit');
            $table->string('mailing_address_state')->nullable()->after('mailing_address_city');
            $table->string('mailing_address_zip')->nullable()->after('mailing_address_state');
            $table->string('shipping_address_street')->nullable()->after('mailing_address_zip');
            $table->string('shipping_address_city')->nullable()->after('shipping_address_street');
            $table->string('shipping_address_state')->nullable()->after('shipping_address_city');
            $table->string('shipping_address_zip')->nullable()->after('shipping_address_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('cell');
            $table->dropColumn('mailing_address_street');
            $table->dropColumn('mailing_address_apt_or_unit');
            $table->dropColumn('mailing_address_city');
            $table->dropColumn('mailing_address_state');
            $table->dropColumn('mailing_address_zip');
            $table->dropColumn('shipping_address_street');
            $table->dropColumn('shipping_address_city');
            $table->dropColumn('shipping_address_state');
            $table->dropColumn('shipping_address_zip');
        });
    }
}
