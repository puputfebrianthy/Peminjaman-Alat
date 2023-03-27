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
        Schema::create('tb_monitoring', function (Blueprint $table) {
            $table->id();
            $table->unique('id');
            $table->date('hari');
            $table->time('waktu');
            $table->string('pembahasan');
            $table->string('pembelajaran');
            $table->string('dosen');
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
        Schema::dropIfExists('tb_monitoring');
    }
};
