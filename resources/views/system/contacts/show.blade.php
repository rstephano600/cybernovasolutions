@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Message Details</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone ?? '-' }}</p>
            <p><strong>Service:</strong> {{ ucfirst(str_replace('-', ' ', $contact->service)) }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contact->message }}</p>
            <p><strong>Received At:</strong> {{ $contact->created_at->format('d M Y, H:i A') }}</p>

            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back</a>
            <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this message?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
