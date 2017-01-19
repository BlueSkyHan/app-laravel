@extends('layouts.admin')

@section('content')
    <h1>Edit User</h1>
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$user->photo ? $user->photo->name : 'http://placehold.it/200x200'}}" alt="" class="img-responsive img-rounded">
        </div>
        <div class="col-sm-9">
            {!! Form::model($user, ['action'=>['AdminUsersController@update', $user->id], 'method'=>'PATCH', 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_active', 'Is Active:') !!}
                {!! Form::select('is_active', array(1=>'Yes', 0=>'No'), null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit', ['class'=>'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}

            {!! Form::open(['action'=>['AdminUsersController@destroy', $user->id], 'method'=>'DELETE']) !!}
            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        @include('includes.display_form_errors')
    </div>
@endsection