<?php

namespace App\Models;

use App\Casts\EmailVerifiedCast;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'middle_name',
        'last_name',
        'cell',
        'mailing_address_street',
        'mailing_address_apt_or_unit',
        'mailing_address_city',
        'mailing_address_state',
        'mailing_address_zip',
        'shipping_address_street',
        'shipping_address_city',
        'shipping_address_state',
        'shipping_address_zip',
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
        'email_verified_at' => EmailVerifiedCast::class,
    ];

    protected $appends = ['shortName', 'fullName'];

    public function getShortNameAttribute()
    {
        return $this->name . ' ' . $this->last_name;
    }

    public function getFullNameAttribute()
    {
        return $this->name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
}
