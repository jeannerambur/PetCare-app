<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestControl extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Anti-parasites'
    ];

    protected $fillable = [
		'title_name',
        'type',
        'name',
        'dose',
		'date'
	];
}