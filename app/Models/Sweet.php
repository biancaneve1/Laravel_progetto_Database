<?php

namespace App\Models;

use App\Models\User;
use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sweet extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'producer', 'price', 'description', 'cover', 'user_id','category_id'];

    public function user(){
      return $this-> belongsTo(User::class);
    }

    public function category(){
      return $this-> belongsTo(Category::class);
    }

    public function recipes(){

      return $this->belongsToMany(Recipe::class);
          }


}
