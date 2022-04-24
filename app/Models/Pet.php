<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id', 'type', 'birth', 'sex'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
