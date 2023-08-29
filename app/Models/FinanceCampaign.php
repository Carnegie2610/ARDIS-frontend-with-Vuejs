<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceCampaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'financecampaignname',
    ];

}
