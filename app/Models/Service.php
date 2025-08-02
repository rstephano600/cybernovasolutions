<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'base_price',
        'is_active'
    ];

    // Relationships
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function scopeDevelopment($query)
    {
        return $query->where('category', 'development');
    }

    public function scopeDesign($query)
    {
        return $query->where('category', 'design');
    }
}