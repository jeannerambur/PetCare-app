<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    protected $attributes = [
		'image' => 'https://pet-care-ecv.s3.eu-west-3.amazonaws.com/images/default-placeholder.jpg',
	];
    protected $fillable = ['name','user_id', 'birth', 'sex'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
