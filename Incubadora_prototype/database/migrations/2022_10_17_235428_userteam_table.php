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
        // Schema::create('userteam', function (Blueprint $table) {
        //     $table->bigInteger('idUser')->unsigned();
        //     $table->foreign('idUser')->references('id')->on('user')->onDelete('cascade');
        //     $table->bigInteger('idTeam')->unsigned();
        //     $table->foreign('idTeam')->references('id')->on('team')->onDelete('cascade');
        //     $table->timestamps();
        // });

        Schema::create('userteams', function (Blueprint $table) {
            $table->unsignedBigInteger('idUser');
            $table->unsignedBigInteger('idTeam');
        
            $table->primary(['idUser', 'idTeam']);
        
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
            $table->foreign('idTeam')->references('id')->on('teams')->onDelete('cascade')->onUpdate('no action');
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
        //
    }
};
