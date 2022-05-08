<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poids extends Model
{
    use HasFactory;
    protected $attributes = [
		'title_name' => 'Poids'
    ];

    protected $fillable = ['title_name', 'poids', 'date'];
}
