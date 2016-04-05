<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transaction_id');
            $table->string('surname');
            $table->string('first_name');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('state_of_birth');
            $table->text('contact_address');
            $table->string('email');
            $table->string('contact_phone');
            $table->string('BBM_pin');
            $table->string('complexion');
            $table->string('hair_colour');
            $table->string('eye_colour');
            $table->string('height');
            $table->string('weight');
            $table->string('waist');
            $table->string('burst');
            $table->string('hips');
            $table->string('occupation');
            $table->string('student');
            $table->string('course_of_study');
            $table->string('working_as');
            $table->string('religion');
            $table->string('language_speaking');
            $table->text('describe_yourself');
            $table->string('pagent');
            $table->string('hobbies');
            $table->string('best_dish');
            $table->string('role_model');
            $table->string('why_model');
            $table->string('favourite_colour');
            $table->string('favourite_outfit');
            $table->string('favourite_book');
            $table->string('favourite_author');
            $table->string('favourite_movie');
            $table->string('favourite_actor');
            $table->string('favourite_music');
            $table->string('favourite_musician');
            $table->text('pagent_reason');
            $table->string('contestant');
            $table->text('win_pagent');
            $table->text('hiv');
            $table->text('child_abuse');
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
        Schema::drop('registers');
    }
}
