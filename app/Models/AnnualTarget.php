<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualTarget extends Model
{
    use HasFactory;
    protected $primaryKey = 'annual_target_ID';
    protected $fillable = [
        'annual_target',
        'measure_ID',
        'province_ID'
    ];
}
