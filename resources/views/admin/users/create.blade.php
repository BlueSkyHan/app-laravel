@extends('layouts.admin')

@section('content')
    <h1>Create User</h1>
    <div class="row">
        {!! Form::open(['action'=>'AdminUsersController@store', 'method'=>'POST', 'files'=>true]) !!}
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
    </div>
    <div class="row">
        @include('includes.display_form_errors')
    </div>
@endsection