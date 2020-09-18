<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }

    public function month()
    {
        return $this->belongsTo('App\Month');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}