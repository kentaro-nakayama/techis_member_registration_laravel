@extends('layouts.common')

@section('content')
<div class="header">
    <h1>Register</h1>
    <hr>
</div>
<div class="main" >
    <div class="form mb-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('/createUser') }}" method="POST" class="">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Taro" autocomplete="name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Phone number</label>
                <input type="tel" name="phone_number" class="form-control" id="tel" placeholder="090XXXXXXXX" autocomplete="tel">
                @error('tel')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
<hr>
<a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
@endsection