<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relazione molti-a-molti con Trip
    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'country_trip');
    }
}
