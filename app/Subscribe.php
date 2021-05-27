<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $table = 'subs';

    public $timestamps = true;

    protected $fillable = [
        'email',
    ];
}
