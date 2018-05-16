@extends('account.account')

@section('accountAction')
    <style>
    </style>
    <h1 class="display-4 text-white">Account Dashboard</h1>

    <div class="container-fluid">
        <div class="mt-4 mb-5">
            <h2 class="text-white mA-header">User Information</h2>
            <div class="row">
                <div class="col-md-6">
                    <span class="mA-item">Username: <b>{{$user->username}}</b></span>
                </div>

                <div class="col-md-6">
                    <span class="mA-item">Email: <b>{{$user->email}}</b></span>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <h2 class="text-white mA-header">Account Information</h2>
            <div class="row">
                <div class="col-md-6">
                    <span class="mA-item">Account Type: <b>{{$user->UserRole->Roles[0]->title}}</b></span>
                </div>

                <div class="col-md-6">
                    <div>
                        <span class="mA-item">Created At: <b>{{$user->created_at->toDayDateTimeString()}}</b></span>
                    </div>
                    <div>
                        <span class="mA-item">Last Update: <b>{{$user->updated_at->toDayDateTimeString()}}</b></span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{var_dump($user->isVerified())}}


@endsection