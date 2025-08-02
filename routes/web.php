<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// FRONTEND
Route::get('/', function () {
    return view('website.index');
})->name('index');
Route::get('/contact', function () {return view('website.contact');})->name('contact');
Route::get('/skills', function () {return view('website.skills');})->name('skills');
Route::get('/services', function () {return view('website.services');})->name('services');
Route::get('/about', function () {return view('website.about');})->name('about');
Route::get('/portfolio', function () {return view('website.portfolio');})->name('portfolio');
Route::get('/privacy', function () {return view('website.privacy');})->name('privacy');
Route::get('/terms', function () {return view('website.terms');})->name('terms');
Route::get('/cookies', function () {return view('website.cookies');})->name('cookies');
Route::get('/sitemap', function () {return view('website.sitemap');})->name('sitemap');
Route::get('/website', function () {return view('website.website');})->name('website');
Route::get('/system', function () {return view('website.system');})->name('system');
Route::get('/mobile-app', function () {return view('website.mobile-app');})->name('mobile-app');
Route::get('/services/fyp-projects', function () {return view('website.fyp-projects');})->name('fyp-projects');
Route::get('/graphics', function () {return view('website.graphics');})->name('graphics');
Route::get('/stationary', function () {return view('website.stationary');})->name('stationary');
Route::get('/timetable', function () {return view('website.timetable');})->name('timetable');
Route::get('/updates', function () {return view('website.updates');})->name('updates');
Route::get('/mission', function () {return view('website.mission');})->name('mission');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\auth\RegisteredUserController;
use App\Http\Controllers\auth\AuthenticatedSessionController;
use App\Http\Controllers\auth\PasswordResetLinkController;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    
    Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    
    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');
    // ... other auth routes
});

// BACKEND
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::resource('users', UserController::class)->middleware('auth');

Route::middleware(['auth', 'verified'])->group(function () {
    // Common routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Admin/Staff routes
    Route::middleware(['role:admin|staff'])->group(function () {
        Route::resource('projects', ProjectController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('fyp-projects', FYPProjectController::class);
    });
    
    // Admin-only routes
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);
        Route::get('reports', [ReportController::class, 'index'])->name('reports.index');
    });
    
    // Client routes
    Route::middleware(['role:customer'])->prefix('client')->name('client.')->group(function () {
        Route::resource('projects', ClientProjectController::class)->only(['index', 'show']);
        Route::resource('invoices', ClientInvoiceController::class)->only(['index', 'show']);
        Route::resource('fyp-projects', ClientFYPProjectController::class)->only(['index', 'show', 'edit', 'update']);
    });
});

use App\Http\Controllers\ContactController;

// Public route for form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes to view contact messages
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/admin/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::patch('/admin/contacts/{contact}/toggle-lead', [ContactController::class, 'toggleLead'])->name('contacts.toggleLead');

});
