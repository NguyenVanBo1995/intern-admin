<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    public $timestamps = true;

    protected $fillable = [
        'customer_id', 'date','number'
    ];
    
    public function customer(){
        return $this->belongsTo('App\Model\Customer');
    }
}
