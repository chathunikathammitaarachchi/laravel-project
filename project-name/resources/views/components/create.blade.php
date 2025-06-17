@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add User</h2>

    <form method="POST" action="{{ route('userstore') }}">
        @csrf
        <div class="mb-3">
            <label>Frist Name</label>
            <input type="text" name="fristname" class="form-control" required>
        </div>

         <div class="mb-3">
            <label>last Name</label>
            <input type="text" name="lastname" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
