<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


use TCG\Voyager\Models\Post as VoyagerUser;


class Post extends VoyagerUser
{
    use HasFactory;
    use Sluggable;


    public function getRouteKeyName()
    {
        return 'slug';
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
                'source' => 'title'
            ]
        ];
    }

}
