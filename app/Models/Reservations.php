<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
use App\Models\DetailsReservation;
class Reservations extends Model
{
    use HasFactory;
    
    public function clients(){
        return $this->belongsTo(Clients::class);  
    }
    public function DetailsReservations(){
        return $this->belongsTo(DetailsReservation::class);  
    }
}
