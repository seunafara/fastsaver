@extends('layouts.mainuser')

@section('user_title')

    <h3 class="page-title" style="position: absolute;">Edit Fixed Plan</h3>
@stop

@section('user_content')

    <div class="container">

        <div style="background: white; padding: 15px 15px 15px 15px; margin-top: 10px; border-radius: 10px">
            <div class="form-group col-xs-6">


                @include('includes.form_error')



                {!! Form::model( $fixed_plans, ['method'=>'PATCH', 'action'=>['UserFixedPlanController@update', $fixed_plans->id]]) !!}

                <div class="form-row">

                    <div class="form-group col-md-6">

                        {!! Form::label('name', 'Plan Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control'] ) !!}
                    </div>



                    <div class="form-group col-md-6">
                        {!! Form::label('start_date', 'Start Date') !!}
                        {!! Form::text('start_date', null, [ 'data-provide'=>'datepicker', 'data-date-format'=>"yyyy/mm/dd", 'class'=>'form-control' ]) !!}
                    </div>





                    <div class="form-group col-md-6">
                        {!! Form::label('end_date', 'End Date') !!}
                        {!! Form::text('end_date', null, [ 'data-provide'=>'datepicker', 'data-date-format'=>"yyyy/mm/dd", 'class'=>'form-control' ]) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('plan_balance', 'Plan Balance') !!}
                        {!! Form::number('plan_balance', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('plan_amount', 'Plan Amount') !!}
                        {!! Form::number('plan_amount', null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('rate', 'Interest Rate') !!}
                        {!! Form::number('rate', null, ['class'=>'form-control']) !!}
                    </div>



                </div>

                <div class="form-group">


                    {!! Form::submit('Update Fixed Plan', ['class'=>'btn btn-primary col-sm-4']) !!}

                </div>



                {!! Form::close() !!}



















            </div>
        </div>
    </div>
@stop

<script src="{{asset('../js/bootstrap-datepicker.min.js')}}"></script>
