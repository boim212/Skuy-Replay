<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekaman1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaman1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('semester_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('matkul_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

            // $table->foreignId('semester_id')->nullable()->onUpdate('cascade')->onDelete('set_null');
            // $table->foreignId('matkul_id')->nullable()->onUpdate('cascade')->onDelete('set null');
            $table->string('slug')->default('');
            $table->string('judul',100);
            $table->string('kelas',2);
            $table->string('tanggal',11);
            $table->string('link',30);
            $table->string('link_id',12);
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
        Schema::dropIfExists('rekaman1');
    }
}
