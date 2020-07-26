<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNotifStatusToTransactionDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaction__details', function (Blueprint $table) {
            $table->integer('notif_status_member')->nullable()->after('updated_at');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction__details', function (Blueprint $table) {
            $table->dropColumn(['notif_status_member']);
            
        });
    }
}
