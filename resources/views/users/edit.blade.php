@extends('layouts.app')

@section('content')
<h1>Edit User</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ old('name', $user->name) }}" required><br>
    <input type="email" name="email" value="{{ old('email', $user->email) }}" required><br>
    <input type="password" name="password" placeholder="New Password (leave blank if not change)"><br>
    <button type="submit">Update</button>
</form>
@endsection
