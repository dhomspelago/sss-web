<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    use  SoftDeletes;

    const ANNOUNCEMENT_TYPE = 'announcement';
    const UPDATE_TYPE = 'update';

    protected $fillable = [
        'image',
        'type',
        'is_published',
    ];
}
