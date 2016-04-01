@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit $Ercas$</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($$Ercas$, ['route' => ['$Ercas$s.update', $$Ercas$->id], 'method' => 'patch']) !!}

            @include('$Ercas$s.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection