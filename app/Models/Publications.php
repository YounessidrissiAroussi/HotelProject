<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;

class Publications extends Model
{
    use HasFactory;

    public function images(){
        return $this->hasMany(Images::class);  
    }
}
