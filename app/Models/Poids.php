<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poids extends Model
{
    use HasFactory;
    protected $fillable = ['poids','pet_id', 'date'];
}
