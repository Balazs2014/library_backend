<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function writers()
    {
        return $this->belongsTo(Writer::class);
    }

    protected $visible = [
        'id',
        'title'
    ];
}
