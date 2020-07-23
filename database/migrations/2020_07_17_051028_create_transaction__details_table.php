<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('kode_transaksi')->nullable();
            $table->text('keterangan_produk')->nullable();
            $table->integer('total_quantity')->nullable();
            $table->bigInteger('total_harga')->nullable();
            $table->string('pengiriman')->nullable();
            $table->integer('harga_pengiriman')->nullable();
            $table->string('bukti_transfer')->nullable();
            $table->string('no_resi')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('transaction__details');
    }
}
