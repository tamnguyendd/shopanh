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
        Schema::create('products', function(Blueprint $table)
        {
            $table->id();
            $table->bigInteger('brand_id')->unsigned();
            $table->string('sku');
            $table->string('name');
            $table->string('slug');
            $table->string('summary');
            $table->text('overview');
            $table->text('description');
            $table->text('specification')->nullable();
            $table->unsignedInteger('quantity');
            $table->decimal('shipping_fee', 8, 2)->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
            $table->timestamps();
        });

        Schema::table('products', function(Blueprint $table)
        {
            $table->foreign('brand_id')
                ->references('id')->on('brands')
                ->onDelete('cascade');
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
