<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\DetailsReservation;
class Chambers extends Model
{
    use HasFactory;
    protected $fillable  = [
        "NChambre",
        "title",
        "Description",
        "Email",
        "prix",
    ];
    public function images(){
        return $this->HasMany(Images::class , 'chamber_id');
    }
    public function DetailsReservations(){
        return $this->HasMany(DetailsReservation::class);
    }
}
