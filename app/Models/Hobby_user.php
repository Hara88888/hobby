<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby_user extends Model
{
    protected $fillable=[
        'name',
         'address',
         'email',
         'gender',
         'password',
         'method',
        ];
    use HasFactory;
    
}
