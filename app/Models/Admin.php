<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
     //inserer les valeurs des colonnes et les rendre assignable
     protected $guarded = [];
}
