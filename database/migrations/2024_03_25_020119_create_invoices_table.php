<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{

    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('invoice_number');
            $table->date('invoice_Date')->nullable();
            $table->date('due_date')->nullable();
            $table->string('product');
            $table->bigInteger('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->decimal('Amount_Collection',8,2)->nullable();
            $table->decimal('Amount_Commission',8,2);
            $table->decimal('Discount');
            $table->decimal('Value_Vat',8,2);
            $table->string('Rate_Vat');
            $table->decimal('Total',8,2);
            $table->string('Status', 50)->default('غير مدفوعة');
            $table->integer('value_status')->default('2');
            $table->text('note')->nullable();
            $table->date('Payment_Date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
