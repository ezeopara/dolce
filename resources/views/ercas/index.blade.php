@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Ercas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('ercas.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($ercas->isEmpty())
            <div class="well text-center">No Ercas found.</div>
        @else
            @include('ercas.table')
        @endif
        
    </div>
@endsection