<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('details');
            $table->string('date');
            $table->string('types');
            $table->string('subtypes');
            $table->string('name')->default('/images/default.png');         
            $table->string('name1')->default('/images/default.png');
            $table->string('details1')->nullable();
            $table->string('reporter');
            $table->string('rcode');
            $table->string('repemail');
            $table->string('status');
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
        Schema::dropIfExists('papers');
    }
}
