<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //* Fillable example
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'active'
    // ];

    //* Guarded example
    protected $guarded = [];

    protected $attributes = [
        'active' => 1
    ];

    public function getActiveAttribute($attribute) {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    public function scopeInactive($query) {
        return $query->where('active', 0);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions() {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-progress'
        ];
    }
}