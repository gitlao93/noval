<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyTarget extends Model
{
    use HasFactory;
    protected $primaryKey = 'monthly_target_ID';
    protected $fillable = [
        'monthly_target',
        'annual_target_ID',
        'division_ID',
        'month'
    ];
}
