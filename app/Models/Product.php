<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];

    public function productvariant(){
        return $this->hasOne(Productvariant::class);
    }
  
}
