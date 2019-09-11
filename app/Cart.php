<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['mp_response'];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
}
