<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlantingRate extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'essence_cilture_id',
        'grade',

    ];
}
