<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'model',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
