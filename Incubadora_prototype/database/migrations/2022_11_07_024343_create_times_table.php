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
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            
            $table->date('form1_start');
            $table->date('form1_end');

            $table->date('form2_start');
            $table->date('form2_end');
            
            $table->date('form3_start');
            $table->date('form3_end');
            
            $table->date('form4_start');
            $table->date('form4_end');

            $table->date('form5_start');
            $table->date('form5_end');

            $table->date('form6_start');
            $table->date('form6_end');

            $table->date('form7_start');
            $table->date('form7_end');

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
        Schema::dropIfExists('times');
    }
};
