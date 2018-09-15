<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table = 'domains';
    public $incrementing = false;
    protected $primaryKey = 'domain';
    public $timestamps = false;
}