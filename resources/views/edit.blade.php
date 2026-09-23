@extends('layouts.common')

@section('content')

<div class="header">
    <h1>Edit and Delete</h1>
    <hr>
</div>
<div class="main">
    <div class="form mb-3">
        <form action="{{ url('/editUser/' . $member->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $member->name }}">
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Phone number</label>
                <input type="tel" name="phone_number" class="form-control" id="tel" value="{{ $member->phone_number }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ $member->email }}">
            </div>
            <button type="submit" class="btn btn-primary mb-2" style="width: 80px;">Edit</button>
        </form>
        <form action="{{ url('/deleteUser/' . $member->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger" style="width: 80px;" onclick="return confirm('Are you sure to delete?')">Delete</button>
        </form>
    </div>
</div>
<hr>
<a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
@endsection
