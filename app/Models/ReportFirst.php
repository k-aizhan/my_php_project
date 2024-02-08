<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ReportFirst extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'bin_id',
        'company_id',
        'grade',
        'count',
        'cadastral_id',
        'amount'
    ];
}
