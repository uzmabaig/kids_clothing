<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticate;

class User extends Authenticate
{
    use HasFactory;
    protected $fillable = [];
    protected $guarded =  [];

 

}
