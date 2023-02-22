<?php

namespace App\Models;

use App\Models\Objective;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opcr extends Model
{
    use HasFactory;
    protected $primaryKey = 'opcr_ID';

    protected $fillable = [
        'opcr',
        'is_active'
    ];

    public function objectives()
    {
        return $this->hasMany(Objective::class, 'opcr_ID');
    }
}
