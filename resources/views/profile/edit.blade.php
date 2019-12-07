@extends('layouts.mainuser')

@section('user_title')

    <h3 class="page-title" style="position: absolute;">Edit Profile</h3>
@stop

@section('user_content')

    <div class="container">

        <div style="background: white; padding: 15px 15px 15px 15px; margin-top: 10px; border-radius: 10px">
            <div class="form-group col-xs-6">






                {!! Form::model($user, ['method'=>'post', 'action'=>['ProfileController@setting', $user->id]]) !!}



                <input type="hidden" value="{{$user->id}}" name="id">

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

                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password',  ['class'=>'form-control'] ) !!}

                    </div>

                </div>

                <div class="form-group">


                    {!! Form::submit('Update', ['class'=>'btn btn-primary col-sm-6']) !!}

                </div>



                {!! Form::close() !!}









            </div>
        </div>
    </div>
    {{--   <div class="ce"></div>--}}
@stop