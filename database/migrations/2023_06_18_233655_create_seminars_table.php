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
        Schema::create('seminars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('username');
            $table->string('instansi');
            $table->string('phone');
            $table->string('email');
            $table->string('berkas')->nullable();
            $table->string('pembayaran')->nullable();
            $table->string('konfirmasi_berkas')->nullable()->default('Invalid');
            $table->string('konfirmasi_pembayaran')->nullable()->default('Invalid');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('seminars');
    }
};
