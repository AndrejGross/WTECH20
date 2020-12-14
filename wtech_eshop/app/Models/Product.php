<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['quantity'];
    use Searchable;

    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function orders()
    {
        return $this->belongsToMany('App\Models\Order');
    }

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }
}
