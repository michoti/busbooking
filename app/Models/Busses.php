<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busses extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'trip_id',
        'capacity'
    ];

    public function seats(){
        return $this->hasMany(seats::class);
    }
    public function trips(){
        return $this->belongsTo(Trips::class);
    }
}
