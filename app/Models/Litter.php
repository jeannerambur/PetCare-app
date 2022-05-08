<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Nettoyage litière'
    ];

    protected $fillable = [
		'title_name',
		'date'
	];
}
