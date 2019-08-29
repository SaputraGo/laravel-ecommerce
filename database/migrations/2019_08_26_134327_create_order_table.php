<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->integer('product')->reference('id')->on('product')->onDelete('cascade');
            $table->integer('user')->reference('id')->on('users')->onDelete('cascade');
            $table->integer('quantity');
            $table->string('address');
            $table->enum('status', ['belum_bayar', 'bayar', 'pengiriman', 'expired', 'batal']);
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
        Schema::dropIfExists('order');
    }
}
