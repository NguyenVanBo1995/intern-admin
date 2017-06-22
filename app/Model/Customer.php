<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public $timestamps = true;
    protected $fillable = array(
        'name', 'email', 'birthday', 'status', 'number',
    );
}
