@extends('layouts.admin')
@section('content')
    <h1>Posts</h1>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>
            <th>Title</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="100" width="100" src="{{$post->photo ? $post->photo->name : 'http://placehold.it/100x100'}}" alt="" class="img-rounded"></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection