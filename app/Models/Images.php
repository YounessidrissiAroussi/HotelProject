<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publications;
use App\Models\chambers;

class Images extends Model
{
    use HasFactory;
    protected $fillable = [
        'chamber_id',
        'url',
    ];
    public function publications(){
        return $this->belongsTo(Publications::class);  
    }
    public function chambers(){
        return $this->belongsTo(chambers::class , 'id');  
    }

}
