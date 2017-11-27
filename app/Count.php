<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    public $table = 'deventries';

    public $fillable = ['mac', 'ip', 'direction', 'time'];
}
