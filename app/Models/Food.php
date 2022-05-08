<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Alimentation'
    ];

    protected $fillable = [
		'title_name',
        'type',
        'marque',
        'quantite',
		'date'
	];
}
