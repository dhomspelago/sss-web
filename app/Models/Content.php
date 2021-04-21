<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    const ANNOUNCEMENT_TYPE = 'announcement';
    const UPDATE_TYPE = 'update';

    protected $fillable = [
        'image',
        'type',
    ];
}
