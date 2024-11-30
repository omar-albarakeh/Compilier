<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class workspaces extends Model
{
    use HasFactory;

   protected $fillable=
   [
        'name',
        'users_id',
    ];
     public function user()
    {
        return $this->belongsTo(users::class);
    }
}
