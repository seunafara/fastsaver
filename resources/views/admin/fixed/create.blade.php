@extends('layouts.mainadmin')

@section('title')

    <h3 class="page-title" style="position: absolute;">Create Fixed Plan</h3>
@stop

@section('content')

    <div class="container">

        <div style="background: white; padding: 15px 15px 15px 15px; margin-top: 10px; border-radius: 10px">
            <div class="form-group col-xs-6">






                {!! Form::open(['method'=>'POST', 'action'=>'FixedPlansController@store']) !!}

                <div class="form-row">

                    <div class="form-group col-md-6">

                        {!! Form::label('name', 'Plan Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control'] ) !!}

                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('user_id', 'Plan User') !!}
                        {!! Form::select('user_id', [''=>'Choose User'] + $users ,  null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-md-6" style="display: none">
                        {!! Form::label('start_date', 'Start Date') !!}
                        {!! Form::text('start_date', null, [ 'data-provide'=>'datepicker', 'data-date-format'=>"yyyy/mm/dd", 'class'=>'form-control' ]) !!}
                    </div>



                    <div class="form-group col-md-6">
                        {!! Form::label('end_date', 'End Date') !!}
                        {!! Form::text('end_date', null, [ 'data-provide'=>'datepicker', 'data-date-format'=>"yyyy/mm/dd", 'class'=>'form-control' ]) !!}
                    </div>



                    <div class="form-group col-md-6">
                        {!! Form::label('plan_amount', 'Plan Amount') !!}
                        {!! Form::number('plan_amount', null, ['class'=>'form-control']) !!}
                    </div>



                </div>

                <div class="form-group">


                    {!! Form::submit('Create Fixed Plan', ['class'=>'btn btn-primary']) !!}

                </div>



                {!! Form::close() !!}







            </div>
        </div>
    </div>
@stop
<script>$('.datepicker').datepicker({
        format: 'yyyy/mm/dd',
        startDate: '-0d'
    });</script>
<script src="{{asset('../js/bootstrap-datepicker.min.js')}}"></script>
