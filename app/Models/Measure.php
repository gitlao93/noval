<?php

namespace App\Models;

use App\Models\Objective;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Measure extends Model
{
    use HasFactory;
    protected $primaryKey = 'measure_ID';
    protected $fillable = [
        'measure',
        'objective_ID',
        'division_ID',
        'driver_ID'
    ];

    public function objective()
    {
        return $this->belongsTo(Objective::class, 'objective_ID');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_ID');
    }

    public function driver()
    {
        return $this->belongsTo(driver::class, 'driver_ID');
    }
}
