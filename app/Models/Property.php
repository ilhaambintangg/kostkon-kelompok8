<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address', 
        'description',
        'price_range_start',
        'price_range_end',
        'contact_phone',
        'contact_email',
        'status'
    ];

    protected $casts = [
        'price_range_start' => 'decimal:2',
        'price_range_end' => 'decimal:2',
    ];

    public function isActive()
    {
        return $this->status === 'active';
    }

    public function getPriceRangeAttribute()
    {
        if ($this->price_range_start && $this->price_range_end) {
            return 'Rp ' . number_format($this->price_range_start, 0, ',', '.') . ' - Rp ' . 
                   number_format($this->price_range_end, 0, ',', '.');
        }
        return 'Belum diatur';
    }

    public function getStatusBadgeAttribute()
    {
        return $this->isActive() ? 'bg-success' : 'bg-danger';
    }
}