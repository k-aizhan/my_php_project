<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportSecond extends Model
{
    use HasFactory;
    protected $fillable = [
        'expertise_date_time',
        'term_date',
        'planting_date',
        'weight',
        'sales_quantity',
        'yield'
    ];
}
