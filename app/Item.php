<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /**
     * @var string
     */
    protected $table = 'items';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'currency_id', 'picture_url', 'description',
        'category_id', 'quantity', 'unit_price',
    ];

    public function preferences()
    {
        return $this->belongsToMany(Preference::class);
    }
}
