@extends('layouts.mainadmin')

@section('title')

   <h3 class="page-title" style="position: absolute;">Edit User</h3>
@stop

@section('content')

   <div class="container">

      <div style="background: white; padding: 15px 15px 15px 15px; margin-top: 10px; border-radius: 10px">
         <div class="form-group col-xs-6">






            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id]]) !!}

            <div class="form-row">

               <div class="form-group col-md-6">

                  {!! Form::label('name', 'Full Name') !!}
                  {!! Form::text('name', null, ['class'=>'form-control'] ) !!}

               </div>

               <div class="form-group col-md-6">
                  {!! Form::label('email', 'Email Address') !!}
                  {!! Form::email('email', null, ['class'=>'form-control'] ) !!}
               </div>

               <div class="form-group col-md-6">
                  {!! Form::label('role_id', 'Pick Role') !!}
                  {!! Form::select('role_id', [''=>'Choose Options'] + $roles ,  null, ['class'=>'form-control']) !!}
               </div>

               <div class="form-group col-md-6">
                  {!! Form::label('is_active', 'User Status') !!}
                  {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null, ['class'=>'form-control']) !!}
               </div>

               <div class="form-group col-md-6">

                  {!! Form::label('password', 'Password') !!}
                  {!! Form::text('password', null, ['class'=>'form-control'] ) !!}

               </div>

            </div>

            <div class="form-group">


               {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}

            </div>



            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}



            <div class="form-group">
               {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>

            {!! Form::close() !!}







         </div>
      </div>
   </div>
{{--   <div class="ce"></div>--}}
@stop