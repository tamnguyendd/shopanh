<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('order_number', 50)->unique();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->decimal('tax', 8, 2);
            $table->decimal('sub_total', 8, 2);
            $table->decimal('grand_total', 8, 2);
            $table->unsignedInteger('item_count');

            $table->string('payment_method')->default('stripe');
            $table->string('name_on_card', 50)->nullable();
            $table->string('charge_id')->nullable();
            $table->string('brand', 20)->nullable();
            $table->string('funding', 20)->nullable();
            $table->string('exp_month', 2)->nullable();
            $table->string('exp_year', 4)->nullable();
            $table->boolean('address_check')->default(0);
            $table->boolean('postal_code_check')->default(0);
            $table->boolean('cvc_check')->default(0);
            $table->string('last4', 4)->nullable();
            $table->boolean('payment_status')->default(0);
            $table->boolean('shipped')->default(0);
            $table->timestamp('delivered')->nullable();
            $table->string('error')->nullable();

            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->text('address');
            $table->string('city', 50);
            $table->string('prefecture', 50);
            $table->string('country', 50);
            $table->string('post_code', 10);
            $table->string('phone_number', 15);
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
