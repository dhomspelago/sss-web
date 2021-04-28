<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;

    protected $fillable = [
        'profession_business',
        'foreign_address',
        'business_started',
        'self_monthly_earning',
        'overseas_monthly_earning',
        'is_applying_for_membership',
    ];
}
