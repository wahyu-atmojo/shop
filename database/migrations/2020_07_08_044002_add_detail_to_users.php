<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('alamat')->nullable()->after('password');
            $table->string('kota')->nullable()->after('alamat');
            $table->string('postal_code')->nullable()->after('kota');
            $table->string('phone')->nullable()->after('postal_code');
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
            $table->dropColumn(['alamat'],['city'],['postal_code'], ['phone']);
        });
    }
}
