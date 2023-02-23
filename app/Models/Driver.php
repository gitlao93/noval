<?php

namespace App\Models;

use App\Models\Opcr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Driver extends Model
{
    use HasFactory;
    protected $primaryKey = 'driver_ID';

    protected $fillable = [
        'driver',
        'opcr_ID'
        
    ];
    public function measures()
    {
        return $this->hasMany(Measure::class, 'driver_ID');
    }

    public function opcr()
    {
        return $this->belongsTo(Opcr::class, 'opcr_ID');
    }
}
