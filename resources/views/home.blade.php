@extends('layouts.mainuser')

@section('user_title')

    Dashboard

@stop


@section('user_content')


@stop

@section('user_stats')

    @php
        $bal = 0;
    $interest = 0;
    @endphp

    @foreach ($account = App\FixedPlan::all()->where('user_id', auth()->id()) as $figure)

        @php
            $bal += $figure->plan_amount;
        @endphp

    @endforeach

    @foreach ($account = App\FixedPlan::all()->where('user_id', auth()->id()) as $figure)

        @php


            $userInterest =  $figure->plan_balance - $figure->plan_amount;

                  $interest += $userInterest;
        @endphp

    @endforeach

    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">My Plans</span>
                            <h6 class="stats-small__value count my-3">{{$fixedplans}}</h6>
                        </div>
                        <div class="stats-small__data">
                            {{--                            <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>--}}
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Total Saved</span>
                            <h6 class="stats-small__value count my-3">₦{{number_format(($bal)*.01,2,'.',',')}}</h6>
                        </div>
                        <div class="stats-small__data">
                            {{--                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>--}}
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Interest Earned</span>
                            <h6 class="stats-small__value count my-3">
                                @if($interest < 0)
                                0.00
                                    @else
                                    ₦{{number_format(($interest)*.01,2,'.',',')}}
                                @endif
                            </h6>
                        </div>
                        <div class="stats-small__data">
                            {{--                            <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>--}}
                        </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                </div>
            </div>
        </div>
{{--        <div class="col-lg col-md-4 col-sm-6 mb-4">--}}
{{--            <div class="stats-small stats-small--1 card card-small">--}}
{{--                <div class="card-body p-0 d-flex">--}}
{{--                    <div class="d-flex flex-column m-auto">--}}
{{--                        <div class="stats-small__data text-center">--}}
{{--                            <span class="stats-small__label text-uppercase">Total Users</span>--}}
{{--                            <h6 class="stats-small__value count my-3">{{$users}}</h6>--}}
{{--                        </div>--}}
{{--                        <div class="stats-small__data">--}}
{{--                            --}}{{--                            <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>

@stop

