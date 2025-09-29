<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

}
