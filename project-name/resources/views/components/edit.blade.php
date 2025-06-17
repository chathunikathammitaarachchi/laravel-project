@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>

    <form method="POST" action="{{ route('userupdate', $task->id) }}">
        @csrf
        <div class="mb-3">
            <label>Frist Name</label>
            <input type="text" name="fristname" class="form-control" value="{{ $task->fristname }}" required>
        </div>

         <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="lastname" class="form-control" value="{{ $task->lastname }}" required>
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="{{ $task->age }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
