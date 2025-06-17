@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User List</h2>
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <a href="{{ route('usercreate') }}" class="btn btn-primary mb-3">Add User</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->fristname }}</td>
                    <td>{{ $task->lastname }}</td>
                    <td>{{ $task->age }}</td>
                    <td>
                        <a href="{{ route('useredit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('userdelete', $task->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
