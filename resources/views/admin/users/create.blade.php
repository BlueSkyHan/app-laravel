@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>
    {!! Form::open(['action'=>'AdminUsersController@store', 'method'=>'POST']) !!}
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
            {!! Form::label('photo', 'Photo:') !!}
            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', array(''=>'Choose An Option') + $roles, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Is Active:') !!}
            {!! Form::select('is_active', array(1=>'Yes', 0=>'No'), 0, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    @include('includes.display_form_errors')
@endsection