<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Traitement'
    ];

    protected $fillable = [
		'title_name',
        'name',
        'date',
        'quantite'
	];
}
