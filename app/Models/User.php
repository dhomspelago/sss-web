<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'date_of_birth',
        'gender',
        'civil_status',
        'tax_identification_number',
        'nationality',
        'religion',
        'place_of_birth',
        'home_address',
        'baranggay',
        'district',
        'locality',
        'zip_code',
        'mobile_number',
        'telephone_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute()
    {
        return $this->last_name . ', ' . $this->first_name;
    }

    public function father()
    {
        return $this->hasOne(Father::class);
    }

    public function mother()
    {
        return $this->hasOne(Mother::class);
    }

    public function spouse()
    {
        return $this->hasOne(Spouse::class);
    }

    public function childrens()
    {
        return $this->hasMany(Children::class);
    }
}
