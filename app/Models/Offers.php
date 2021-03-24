<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'competences',
        'salary',
        'date',
        'places_offer',
        'details',
    ];

    protected $casts = [
        'competences' => 'array',
    ];
}
