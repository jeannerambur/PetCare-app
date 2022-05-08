<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wound extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Blessure'
    ];

    protected $fillable = [
		'title_name',
        'name',
        'healing_date',
		'date'
	];
}
