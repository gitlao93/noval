<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opcr extends Model
{
    use HasFactory;
    protected $primaryKey = 'opcr_ID';

    protected $fillable = [
        'opcr',
        'is_active'
    ];
}
