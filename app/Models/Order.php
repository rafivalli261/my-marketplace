<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function buyer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function items() {
        return $this->hasMany(OrderItem::class);
    }

}
