<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appetit extends Model
{
    use HasFactory;
    protected $fillable = ['appetit','pet_id', 'date', 'heure', 'documents'];
}
