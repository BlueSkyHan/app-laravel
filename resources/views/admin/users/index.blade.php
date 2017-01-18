@extends('layouts.admin')

@section('content')
    <h1>Users</h1>
    <table style="width:100%">
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is Active</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->id}}</a></td>
                    <td><img height="100" width="100" src="{{$user->photo ? $user->photo->name : 'http://placehold.it/100x100'}}" alt="" class="img-rounded"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active ? "Yes" : "No"}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection