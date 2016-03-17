@extends('dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Password</h1>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="/user/password">
            {!! csrf_field() !!}

            <div class="col-md-12 raw-margin-top-24">
                <label>Old Password</label>
                <input class="form-control" type="password" name="old_password" placeholder="Old Password">
            </div>

            <div class="col-md-12 raw-margin-top-24">
                <label>New Password</label>
                <input class="form-control" type="password" name="new_password" placeholder="New Password">
            </div>

            <div class="col-md-12 raw-margin-top-24">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="new_password_confirmation" placeholder="Confirm Password">
            </div>

            <div class="col-md-12 raw-margin-top-24">
                <a class="btn btn-default pull-left" href="{{ URL::previous() }}">Cancel</a>
                <button class="btn btn-primary pull-right" type="submit">Save</button>
            </div>
        </form>
    </div>

@stop
