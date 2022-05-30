<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('services')->nullable();
            $table->string('tender_category')->nullable();
            $table->string('tender_title')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_days')->nullable();
            $table->string('due_date')->nullable();
            $table->string('delivery_city')->nullable();
            $table->string('purchase_cond')->nullable();
            $table->boolean('complete')->default(0);
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
        Schema::dropIfExists('tenders');
    }
}
