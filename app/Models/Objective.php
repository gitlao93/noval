<?php

namespace App\Models;

use App\Models\Measure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objective extends Model
{
    use HasFactory;
    protected $primaryKey = 'objective_ID';

    protected $fillable = [
        'objective',
        'opcr_ID'
    ];

    public function measures()
    {
        return $this->hasMany(Measure::class, 'objective_ID');
    }
}
