<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    //
    protected $table = 'books';
    protected $fillable = ['book_code', 'title', 'status'];

    protected $casts = [
        'status' => 'string',
    ];
}
