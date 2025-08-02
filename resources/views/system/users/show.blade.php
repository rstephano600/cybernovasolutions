@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Details</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Phone:</strong> {{ $user->phone ?? '-' }}</p>
            <p><strong>Role:</strong> <span class="badge bg-info">{{ ucfirst($user->role) }}</span></p>
            <p><strong>Status:</strong>
                @if($user->status == 'active')
                    <span class="badge bg-success">Active</span>
                @else
                    <span class="badge bg-secondary">Inactive</span>
                @endif
            </p>
            <p><strong>Created At:</strong> {{ $user->created_at->format('d M Y, H:i A') }}</p>
            <p><strong>Updated At:</strong> {{ $user->updated_at->format('d M Y, H:i A') }}</p>

            <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
