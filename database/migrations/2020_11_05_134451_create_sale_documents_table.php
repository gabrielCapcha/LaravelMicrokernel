<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('ticket', 255);
            $table->integer('type_payment');
            $table->decimal('amount', 8, 2);
            $table->decimal('subtotal', 8, 2);
            $table->decimal('taxes', 8, 2);
            $table->json('products');
            $table->json('data_client');
            $table->tinyInteger('flag_active')->default(1);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
