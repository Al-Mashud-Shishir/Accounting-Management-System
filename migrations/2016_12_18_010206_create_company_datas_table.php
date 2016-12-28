<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_datas', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('name');
	        $table->string('title');
	        $table->date('date');
	        $table->integer('amount');
	        $table->string('debit');
	        $table->string('credit');
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
        Schema::dropIfExists('company_datas');
    }
}
