<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_order', function (Blueprint $table) {
            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('cost_id')->constrained('costs');
            $table->primary(['order_id', 'cost_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_order');
    }
}
