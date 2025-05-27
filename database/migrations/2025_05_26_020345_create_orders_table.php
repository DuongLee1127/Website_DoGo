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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->enum( 'status', ['Đang chờ thanh toán', 'Đã thanh toán', 'Chấp nhận', 'Hủy'])->default('Đang chờ thanh toán');
            $table->decimal('cost_total', 15,0)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('unpaid');
            $table->text('customer_address');
            $table->decimal('shipping_fee', 15, 0)->default(0);
            $table->text('notes')->default('rỗng');
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
};
