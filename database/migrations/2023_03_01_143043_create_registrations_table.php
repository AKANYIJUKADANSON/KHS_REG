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
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            // fields: firstName, lastName, class, stream, Term, Date, TutionPaid

            $table->string('firstName');
            $table->string('secondName');
            $table->string('gender');
            $table->string('class');
            $table->string('stream');
            $table->integer('tutionPaid');

            // With timestamps the table will put the created_at and 
            // updated_at firlds automatically
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
        Schema::dropIfExists('registrations');
    }
};
