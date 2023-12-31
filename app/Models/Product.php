<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Product extends Model
{
    use HasFactory;
    use Sluggable;


    protected $casts = [
        // 'pics' => 'array'
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
