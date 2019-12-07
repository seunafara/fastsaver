@extends('layouts.mainadmin')

@section('title')

    <h3 class="page-title" style="position: absolute;">Fixed Plans</h3>
    <a href="/admin/fixedplan/create" class="btn btn-dark" style="position: relative;float: right;">Create New Plan</a>
@stop

@section('content')


    <div class="main-content-container container-fluid px-4" >

        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                    </div>
                    @if($fixed_plans)
                        <div class="card-body p-0 pb-3 text-center" style="overflow: scroll">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                <tr>
                                    {{--                            <th scope="col" class="border-0">#</th>--}}
                                    <th scope="col" class="border-0">Plan Name</th>
                                    <th scope="col" class="border-0">Plan User</th>
                                    <th scope="col" class="border-0">Plan Amount</th>
                                    <th scope="col" class="border-0">Plan Balance</th>
                                    <th scope="col" class="border-0">Plan Started</th>
                                    <th scope="col" class="border-0">Maturity Date</th>
                                    <th scope="col" class="border-0">Interest</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($fixed_plans as $fixed_plan)
                                    <tr>
                                        {{--                            <td>1</td>--}}
                                        <td><a href="/admin/fixedplan/edit/{{$fixed_plan->id}}">{{$fixed_plan->name}}</a></td>
                                        <td>{{$fixed_plan->user->name}}</td>
                                        <td>₦{{number_format(($fixed_plan->plan_amount)*.01,2,'.',',')}}</td>
                                        <td>₦{{number_format(($fixed_plan->plan_balance)*.01,2,'.',',')}}</td>
                                        <td>{{$fixed_plan->start_date}}</td>
                                        <td>{{$fixed_plan->end_date}}</td>
                                        <td><a class="btn btn-success" href="/admin/fixedplan/{{$fixed_plan->id}}/addinterest">Add Interest</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @stop