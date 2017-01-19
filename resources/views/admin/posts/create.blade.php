@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>
    <div class="row">
        {!! Form::open(['action'=>'AdminPostsController@store', 'method'=>'POST', 'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content:') !!}
                {!! Form::textarea('content', null, ['class'=>'form-control', 'rows'=>5]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', array(''=>'Choose An Category') + $categories, null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', ['class'=>'form-control']) !!}
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