<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dent extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Dent'
    ];

    protected $fillable = [
		'title_name',
		'date'
	];
}
