<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservations;

class Clients extends Model
{
    use HasFactory;
    protected $fillable = [
        'cin',
        'nom',
        'phone',
        'email',
        'type'
    ];

    public function Reservations(){
        return $this->hasMany(Reservations::class);
    }
}
