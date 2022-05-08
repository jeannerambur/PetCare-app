<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appetit extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Appetit'
	];
    protected $fillable = ['appetit','pet_id', 'title_name', 'date', 'heure'];
}
