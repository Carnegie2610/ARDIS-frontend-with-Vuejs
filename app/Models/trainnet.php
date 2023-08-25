<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainnet extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'theme',
        'nuberofparticipants',
        'researcherid',

    ];
}
