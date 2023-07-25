<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'cart_product')
            ->withPivot('count');
    }

    // accessors 
    public function scopeLevel($query)
    {
        $user = Auth::user();
        if ($user->role_id == 1 || $user->role_id == 3)
            return $query;
        else
            return $query->where('user_id', $user->id);
    }
}
