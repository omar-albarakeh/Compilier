<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
   use HasFactory;

    protected $fillable = [
        'recipient_email', 
        'workspaces_id',
    ];

    public function workspace()
    {
        return $this->belongsTo(Workspaces::class);
    }
}
