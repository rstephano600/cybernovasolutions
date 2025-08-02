<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'service_id',
        'title',
        'description',
        'status',
        'start_date',
        'deadline',
        'budget',
        'priority'
    ];

    protected $casts = [
        'start_date' => 'date',
        'deadline' => 'date',
    ];

    // Relationships
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function communications()
    {
        return $this->hasMany(Communication::class);
    }

    public function fypProject()
    {
        return $this->hasOne(FYPProject::class, 'project_id');
    }

    public function isFYP()
    {
        return $this->service->name === 'FYP Support';
    }
}