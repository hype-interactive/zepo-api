<?php

namespace App\Models;
use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory,Uuids;

    public static function getRandomId()
    {
        return Order::inRandomOrder()->first();
    }
}
