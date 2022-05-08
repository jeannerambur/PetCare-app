<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claw extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Griffe'
    ];

    protected $fillable = [
		'title_name',
		'date'
	];
}
