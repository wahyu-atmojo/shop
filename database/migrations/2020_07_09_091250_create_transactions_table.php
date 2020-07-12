<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('kode_transaksi')->nullable();
            $table->text('keterangan_produk')->nullable();
            $table->integer('quantity')->nullable();
            $table->bigInteger('subtotal')->nullable();
            $table->string('pengiriman')->nullable();
            $table->integer('harga_pengiriman')->nullable();
            $table->string('bukti_transfer')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
