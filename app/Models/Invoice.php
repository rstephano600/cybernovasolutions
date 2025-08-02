<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'invoice_number',
        'amount',
        'issued_date',
        'due_date',
        'status',
        'payment_method',
        'notes'
    ];

    protected $casts = [
        'issued_date' => 'date',
        'due_date' => 'date',
        'amount' => 'decimal:2'
    ];

    // Relationships
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function markAsPaid($method = null)
    {
        $this->update([
            'status' => 'paid',
            'payment_method' => $method ?? $this->payment_method
        ]);
    }

    public function isOverdue()
    {
        return $this->due_date->isPast() && $this->status !== 'paid';
    }

    public function scopePaid($query)
    {
        return $query->where('status', 'paid');
    }
}