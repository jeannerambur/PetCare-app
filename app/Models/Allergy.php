<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergy extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Allergie'
	];
    protected $fillable = ['type','pet_id', 'title_name', 'name', 'date'];
}
