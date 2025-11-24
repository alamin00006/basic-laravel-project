@extends('layouts.app')

@section('content')
<h1>Users List</h1>
<a href="{{ route('users.create') }}">Create New User</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.edit', $user->id) }}">Edit</a>
            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Delete user?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
