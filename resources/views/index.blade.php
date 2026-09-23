@extends('layouts.common')

@section('content')
<div class="header">
    <div>
        <h1>Home</h1>
        <hr>
    </div>
</div>
<a href="{{ url('/create') }}" class="btn btn-primary mb-3">Register new member</a>

<!-- 名前・電話番号・メールアドレスで部分一致検索 -->
<form action="{{ url('/') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="keyword" value="{{ $keyword }}" class="form-control" placeholder="Search by name, phone number or email">
        <button type="submit" class="btn btn-outline-secondary">Search</button>
        @if ($keyword)
        <a href="{{ url('/') }}" class="btn btn-outline-secondary">Clear</a>
        @endif
    </div>
</form>

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