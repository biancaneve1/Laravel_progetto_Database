<?php

namespace App\Models;

use App\Models\Sweet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'instructions', 'image', 'time','user_id'];

    public function sweets()
    {

        return $this->belongsToMany(Sweet::class);
    }

    public function user(){
    
        return $this->hasMany(User::class);
    }


}






