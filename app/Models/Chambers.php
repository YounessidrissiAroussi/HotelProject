<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\DetailsReservation;
class Chambers extends Model
{
    use HasFactory;
    protected $fillable = [
        'NChambre',
        'titre',
        'Description',
        'prix', 
        'images'
    ];

    public function images(){
        return $this->HasMany(Images::class);
    }
    public function DetailsReservations(){
        return $this->HasMany(DetailsReservation::class);
    }
}
