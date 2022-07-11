<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('code')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('image');
            $table->decimal('wrongPrice', 8, 2);
            $table->decimal('price', 8, 2);
            $table->boolean('hot')->default(false);
            $table->boolean('new')->default(false);
            $table->boolean('sale')->default(false);
            $table->integer('salepercentage')->nullable();
            $table->boolean('popular')->default(false);
            $table->string('size');
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
        Schema::dropIfExists('products');
    }
}
