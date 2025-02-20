<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['available_seats'];

    // Relazione molti-a-molti con Country
    public function countries()
    {
        return $this->belongsToMany(Country::class, 'country_trip');
    }
}
