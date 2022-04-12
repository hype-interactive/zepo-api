<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupParticipant extends Model
{
    use HasFactory;
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
