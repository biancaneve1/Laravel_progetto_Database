<?php

namespace App\Models;

use App\Models\Sweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model 
{
    use HasFactory;


    protected $fillable=['name'];
    //modello al plurale
    public function sweets(){
        return $this->hasMany(Sweet::class);
    }
   
}
