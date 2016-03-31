@extends('admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1 class="text-center">Create A User</h1>
        </div>
    </div>
    <br />
    <br />
    <div class="col-md-4 col-md-offset-4">
        @include('errors.error')
        @include('include.message')
       
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['action'=>'UserController@store','role'=>'form'])!!}

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="name" value="" placeholder="Full Name..">                                        
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="email" class="form-control" name="email" value="" placeholder=" email">                                        
                </div>
            </div>


            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password" value="" placeholder="Enter Password">                                        
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password">                                        
                </div>
            </div>
            <div class="col-sm-10 col-sm-offset-1">
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="text" class="form-control" name="phone" value="" placeholder="Enter Phone">                                        
                </div>
            </div>


            <div class="col-sm-10 col-sm-offset-1">
                <select class="form-control" name="role" style="margin-bottom: 25px" >

                    <option>Select Option</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>

                </select>
            </div>
            <div class="col-sm-4 col-sm-offset-8">
                <div style="margin-bottom: 25px" class="input-group">
                    <button class="btn btn-primary btn-block" name="save">Register</button>                                        
                </div>
            </div>



            {!! Form::close()!!}
        </div>
    </div>

</div>
@stop