<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Maladie'
    ];

    protected $fillable = [
		'title_name',
        'type',
        'name',
        'healing_date',
		'date'
	];
}

