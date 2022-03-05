<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $fillable = ['PostBaslik','PostAciklama', 'PostAdres', 'Kullanici','Location_X','Location_Y'];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('PostBaslik',100);
            $table->text('PostAciklama');
            $table->text('PostAdres');
            $table->text('Kullanici',100);
            $table->text('Location_X',100);
            $table->text('Location_Y',100);
            $table->text('img_path');
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
        Schema::dropIfExists('posts');
    }
};
