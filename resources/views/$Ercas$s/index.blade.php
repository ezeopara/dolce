@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">$Ercas$s</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('$Ercas$s.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($$Ercas$s->isEmpty())
            <div class="well text-center">No $Ercas$s found.</div>
        @else
            @include('$Ercas$s.table')
        @endif
        
    </div>
@endsection