<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Workspace extends Model
{
    use HasFactory;

   protected $fillable=
   [
        'name',
        'users_id',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
