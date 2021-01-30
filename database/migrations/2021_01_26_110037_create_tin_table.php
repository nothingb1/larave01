<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->id();
            $table->string("tieu_de");
            $table->string("slug");
            $table->string("tom_tat");
            $table->unsignedInteger("view")->default(0);
            $table->integer("status");
            $table->unsignedBigInteger("user_id");  
            $table->unsignedBigInteger("theloai_id");  
            $table->unsignedBigInteger("loaitin_id");  
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade');
            $table->foreign("theloai_id")->references("id")->on("theloai")->onDelete('cascade');
            $table->foreign("loaitin_id")->references("id")->on("loaitin")->onDelete('cascade');
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
        Schema::dropIfExists('tin');
    }
}
