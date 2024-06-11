<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('product_code');
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps();
            });

            Schema::table('roles', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                //rest of fields then...
                $table->foreign('user_id')->references('id')->on('users');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
