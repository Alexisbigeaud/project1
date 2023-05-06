<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createnewstudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstudents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('subject');
            $table->enum('gender', ['male', 'female']);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('newstudents');
    }
}