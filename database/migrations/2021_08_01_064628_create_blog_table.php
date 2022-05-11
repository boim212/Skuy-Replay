<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100)->default(null);
            $table->string('slug')->default('');
            $table->foreignId('semester_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('matkul_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('sampul')->default('');
            $table->longText('konten')->default(null);
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
        Schema::dropIfExists('blogs');
    }
}
