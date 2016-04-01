@extends('admin/admin_template')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">List Registered Users</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
    <?php $i = 1;?>

        @if($user)
        <div class="row">
            <div class="col-md-3">Transact Id:</div>
            <div class="col-md-9">{{$user->transaction_id}}</div>
        </div>
        <div class="row">
            <div class="col-md-3">Surname:</div>
            <div class="col-md-9">{{$user->surname}}</div>
        </div>
        <div class="row">
            <div class="col-md-3">First Name:</div>
            <div class="col-md-9">{{$user->first_name}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Date of Birth:</div>
            <div class="col-md-9">{{$user->date_of_birth}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Place of Birth:</div>
            <div class="col-md-9">{{$user->place_of_birth}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">State of Origin:</div>
            <div class="col-md-9">{{$user->state_of_birth}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Contact Address:</div>
            <div class="col-md-9">{{$user->contact_address}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Email:</div>
            <div class="col-md-9">{{$user->email}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Phone:</div>
            <div class="col-md-9">{{$user->contact_phone}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">BBM Pin:</div>
            <div class="col-md-9">{{$user->BBM_pin}}</div>
        </div>
         <div class="row">
            <div class="col-md-3">Complexion:</div>
            <div class="col-md-9">{{$user->complexion}}</div>
        </div>
        <div class="row">
            <div class="col-md-3">Hair Colour:</div>
            <div class="col-md-9">{{$user->hair_colour}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Eye Colour:</div>
            <div class="col-md-9">{{$user->eye_colour}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Height:</div>
            <div class="col-md-9">{{$user->height}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Weight:</div>
            <div class="col-md-9">{{$user->weight}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Burst:</div>
            <div class="col-md-9">{{$user->burst}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Hips:</div>
            <div class="col-md-9">{{$user->hips}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Occupation:</div>
            <div class="col-md-9">{{$user->occupation}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Student:</div>
            <div class="col-md-9">{{$user->student}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Course of study:</div>
            <div class="col-md-9">{{$user->course_of_study}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Working As:</div>
            <div class="col-md-9">{{$user->working_as}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Religion:</div>
            <div class="col-md-9">{{$user->religion}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Language Speaking:</div>
            <div class="col-md-9">{{$user->language_speaking}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Describe Yourself:</div>
            <div class="col-md-9">{{$user->describe_yourself}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Pagent:</div>
            <div class="col-md-9">{{$user->pagent}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Hobbies:</div>
            <div class="col-md-9">{{$user->hobbies}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Best Dish:</div>
            <div class="col-md-9">{{$user->best_dish}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Role Model:</div>
            <div class="col-md-9">{{$user->role_model}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Why Model:</div>
            <div class="col-md-9">{{$user->why_model}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Colour:</div>
            <div class="col-md-9">{{$user->favourite_colour}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Outfit:</div>
            <div class="col-md-9">{{$user->favourite_outfit}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Book:</div>
            <div class="col-md-9">{{$user->favourite_book}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite author :</div>
            <div class="col-md-9">{{$user->favourite_author}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Music:</div>
            <div class="col-md-9">{{$user->favourite_music}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Movie:</div>
            <div class="col-md-9">{{$user->favourite_movie}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Actor:</div>
            <div class="col-md-9">{{$user->favourite_actor}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Favourite Musician:</div>
            <div class="col-md-9">{{$user->favourite_musician}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">pagent Reason:</div>
            <div class="col-md-9">{{$user->pagent_reason}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Contestant:</div>
            <div class="col-md-9">{{$user->contestant}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">Win pagent:</div>
            <div class="col-md-9">{{$user->win_pagent}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">HIV:</div>
            <div class="col-md-9">{{$user->hiv}}</div>
        </div>
          <div class="row">
            <div class="col-md-3">child Abuse:</div>
            <div class="col-md-9">{{$user->child_abuse}}</div>
        </div>
        @endif
        </div>
        <!--- content Ends------->
    </div><!-- /.box-body -->
</div><!-- /.box -->

@stop