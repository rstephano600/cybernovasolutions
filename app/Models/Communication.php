<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'project_id',
        'subject',
        'message',
        'channel',
        'direction'
    ];

    // Relationships
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function isInbound()
    {
        return $this->direction === 'inbound';
    }

    public function getChannelIconAttribute()
    {
        return [
            'email' => 'fas fa-envelope',
            'phone' => 'fas fa-phone',
            'whatsapp' => 'fab fa-whatsapp',
            'in_person' => 'fas fa-user',
            'ticket' => 'fas fa-ticket-alt'
        ][$this->channel] ?? 'fas fa-comment';
    }
}