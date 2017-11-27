<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Devices extends Model
{

    public $table = 'devices';

    public $fillable = ['mac', 'ip', 'definiton', 'lastdata'];

}
