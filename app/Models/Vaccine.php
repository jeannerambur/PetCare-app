<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Vaccin'
    ];

    protected $fillable = [
		'title_name',
        'name',
        'quantite',
		'date'
	];
}
