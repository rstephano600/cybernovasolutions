@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact Messages</h2>

    <!-- Filters -->
    <form method="GET" action="{{ route('contacts.index') }}" class="row g-3 mb-3">
        <div class="col-md-3">
            <input type="text" name="search" class="form-control" placeholder="Search by name/email/message" value="{{ request('search') }}">
        </div>

        <div class="col-md-3">
            <select name="lead" class="form-select">
                <option value="">-- Filter by Lead --</option>
                <option value="yes" {{ request('lead') == 'yes' ? 'selected' : '' }}>Lead</option>
                <option value="no" {{ request('lead') == 'no' ? 'selected' : '' }}>Not Lead</option>
            </select>
        </div>

        <div class="col-md-3">
            <select name="service" class="form-select">
                <option value="">-- Filter by Service --</option>
                @foreach($services as $service)
                    <option value="{{ $service }}" {{ request('service') == $service ? 'selected' : '' }}>
                        {{ ucfirst(str_replace('-', ' ', $service)) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
        </div>
    </form>

    <!-- Contacts Table -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Lead</th>
                        <th>Received At</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $index => $contact)
                        <tr>
                            <td>{{ $contacts->firstItem() + $index }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ ucfirst(str_replace('-', ' ', $contact->service)) }}</td>
                            <td>
                                @if($contact->is_lead)
                                    <span class="badge bg-success">Lead</span>
                                @else
                                    <span class="badge bg-secondary">Not Lead</span>
                                @endif
                            </td>
                            <td>{{ $contact->created_at->format('d M Y, H:i A') }}</td>
                            <td class="text-end">
                                <a href="{{ route('contacts.show', $contact) }}" class="btn btn-sm btn-info">View</a>
                                <form action="{{ route('contacts.toggleLead', $contact) }}" method="POST" class="d-inline">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-sm {{ $contact->is_lead ? 'btn-warning' : 'btn-success' }}">
                                        {{ $contact->is_lead ? 'Unmark Lead' : 'Mark as Lead' }}
                                    </button>
                                </form>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this message?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center p-3">No messages found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $contacts->links() }}
    </div>
</div>
@endsection
