<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Store contact form submission
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display a list of contacts (Admin only)
     */

    public function index(Request $request)
{
    if (!Auth::check() || !Auth::user()->isAdmin()) {
        abort(403, 'Unauthorized action.');
    }

    $query = Contact::query();

    // Filter by Lead status
    if ($request->filled('lead')) {
        $query->where('is_lead', $request->lead === 'yes');
    }

    // Filter by Service
    if ($request->filled('service')) {
        $query->where('service', $request->service);
    }

    // Search (optional: by name/email/message)
    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%$search%")
              ->orWhere('email', 'like', "%$search%")
              ->orWhere('message', 'like', "%$search%");
        });
    }

    $contacts = $query->latest()->paginate(10);

    // Get distinct services for filter dropdown
    $services = Contact::select('service')->distinct()->pluck('service');

    return view('system.contacts.index', compact('contacts', 'services'));
}


    /**
     * Show a single contact message (Admin only)
     */
    public function show(Contact $contact)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        return view('system.contacts.show', compact('contact'));
    }

    public function toggleLead(Contact $contact)
{
    $contact->update(['is_lead' => !$contact->is_lead]);
    return redirect()->route('contacts.index')->with('success', 'Lead status updated successfully.');
}

    /**
     * Delete a contact message (Admin only)
     */
    public function destroy(Contact $contact)
    {
        if (!Auth::check() || !Auth::user()->isAdmin()) {
            abort(403, 'Unauthorized action.');
        }

        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Message deleted successfully.');
    }


}
