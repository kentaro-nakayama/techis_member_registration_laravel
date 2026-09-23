@extends('layouts.common')

@section('content')
<div class="header">
    <div>
        <h1>Home</h1>
        <hr>
    </div>
</div>
<a href="{{ url('/create') }}" class="btn btn-primary mb-3">Register new member</a>
<!-- 会員情報を一覧表示 -->
@if (count($members) > 0)
<table class="table table-striped text-center align-middle">
    <tr>
        <th>Name</th>
        <th>Phone number</th>
        <th>Email address</th>
        <th></th>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ $member->name }}</td>
        <td>{{ $member->phone_number }}</td>
        <td>{{ $member->email }}</td>
        <td><a href="{{ url('/edit/' . $member->id) }}" class="btn btn-success">Edit</a></td>
    </tr>
    @endforeach
</table>
@else
<div class="alert alert-info text-center" role="alert">
    No member.
</div>
@endif

@endsection