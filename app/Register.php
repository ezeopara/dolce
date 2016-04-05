<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $fillable = [
        'surname',
        'transaction_id',
        'first_name',
        'date_of_birth',
        'place_of_birth',
        'state_of_birth',
        'contact_address',
        'email',
        'contact_phone',
        'BBM_pin',
        'complexion',
        'hair_colour',
        'eye_colour',
        'height',
        'weight',
        'waist',
        'burst',
        'hips',
        'occupation',
        'student',
        'course_of_study',
        'working_as',
        'religion',
        'language_speaking',
        'describe_yourself',
        'pagent',
        'hobbies',
        'best_dish',
        'role_model',
        'why_model',
        'favourite_colour',
        'favourite_outfit',
        'favourite_book',
        'favourite_author',
        'favourite_movie',
        'favourite_actor',
        'favourite_music',
        'favourite_musician',
        'pagent_reason',
        'contestant',
        'win_pagent',
        'hiv',
        'child_abuse'
    ];
}
