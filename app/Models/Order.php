<?php

namespace App\Models;

use App\Traits\Uuids;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Uuids;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public static function getRandomId()
    {
        return Order::inRandomOrder()->first();
    }
}
