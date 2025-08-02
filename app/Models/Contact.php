<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'service',
        'message',
        'is_lead', 
    ];

    protected $casts = [
        'is_lead' => 'boolean', 
    ];

    // Accessor: Display as "Lead" or "Not Lead"
    public function getLeadStatusAttribute()
    {
        return $this->is_lead ? 'Lead' : 'Not Lead';
    }
}
