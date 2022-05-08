<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groom extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Toilettage'
    ];

    protected $fillable = [
		'title_name',
		'date'
	];
}
