<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bath extends Model
{
    use HasFactory;

    protected $attributes = [
		'title_name' => 'Bain'
	];
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'title_name',
		'date'
	];
}
