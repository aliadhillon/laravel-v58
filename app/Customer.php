<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'company_id', 'name', 'email', 'phone', 'active'
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function getActiveAttribute($value)
    {
        return $value !== null ? $this->activeOptions()[$value] : null;
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress'
        ];
    }
}
