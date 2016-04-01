@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Ercas</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($ercas, ['route' => ['ercas.update', $ercas->id], 'method' => 'patch']) !!}

            @include('ercas.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection