<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'Company_Name',
        'Company_Sector',
        'Company_Email',
        'Company_Phone',
        'Company_Website',
        'Company_NBStudent',
        'Company_TutorConfidence',
        'Invisibility',
        'ID_City',

    ];
}
