<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company',
        'number',
        'security',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
