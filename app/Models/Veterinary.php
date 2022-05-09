<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    use HasFactory;

    protected $attributes = [
		'image' => 'default-user.jpg'
	];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
        'name',
        'lastname',
        'adress',
        'zipcode',
        'city',
        'phone',
		'email',
		'image'
	];
}
