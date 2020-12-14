<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tld extends Model
{
    protected $table = 'tld';
    public $incrementing = false;
    protected $primaryKey = 'tld';
    public $timestamps = false;
}
