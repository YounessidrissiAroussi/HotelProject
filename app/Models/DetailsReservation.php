<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chambers;
use App\Models\Reservations;

class DetailsReservation extends Model
{
    use HasFactory;
    public function Chambers(){
        return $this->belongsTo(Chambers::class);
    }
    public function Reservations(){
        return $this->belongsTo(Reservations::class);
    }
}
