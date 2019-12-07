@extends('layouts.mainadmin')

@section('title')

    <h3 class="page-title" style="position: absolute;">All Users</h3>
    <a href="/admin/users/create" class="btn btn-dark" style="position: relative;float: right;">Create User</a>
@stop

@section('content')

    <style>

    </style>


    <div class="main-content-container container-fluid px-4" >
        @if(Session::has('created_user'))

            <p class="bg-success">{{session('created_user')}}</p>

        @endif
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom">
                </div>
                @if($users)
                <div class="card-body p-0 pb-3 text-center" style="overflow: scroll">
                    <table class="table mb-0">
                        <thead class="bg-light">
                        <tr>
{{--                            <th scope="col" class="border-0">#</th>--}}
                            <th scope="col" class="border-0">Full Name</th>
                            <th scope="col" class="border-0">User Role</th>
                            <th scope="col" class="border-0">User Status</th>
                            <th scope="col" class="border-0">Email Address</th>
                            <th scope="col" class="border-0">User Created</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)
                        <tr>
{{--                            <td>1</td>--}}
                            <td><a href="/admin/users/edit/{{$user->id}}">{{$user->name}}</a></td>
                            <td>{{$user->role->name}}</td>
                            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->diffForHumans()}}</td>
                        </tr>
                       @endforeach
                        </tbody>
                    </table>
                </div>
                    @endif
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-5">

                    {{$users->render()}}
                </div>
            </div>
        </div>
    </div>
    </div>

@stop