<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;

    protected $fillable = [
        'song name', 'song genre', 'composer', 'lyrics', 'year created'
    ];
}
